<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Setting;
use Illuminate\Http\Request;
use Phpml\Association\Apriori;

class SimulasiController extends Controller
{
    private $barang;
    private $setting;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Barang $barang, Setting $setting)
    {
        $this->middleware('auth');
        $this->barang = $barang;
        $this->setting = $setting;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['barangs'] = $this->barang->groupBy('kode_barang')->orderBy('kode_barang')->get();
        $predicts = [];
        if (session('result')['predicts']) {
            $predicts = session('result')['predicts'];
        }

        $data['predicts'] = $predicts;
        return view('pages.simulasi', $data);
    }

    public function proses(Request $request)
    {
        $barangs = $request->barang;
        $min_conf = $this->setting->find('min_conf')->value;
        $min_sup = $this->setting->find('min_sup')->value;
        $associator = new Apriori($min_sup / 100, $min_conf / 100);
        $associator->train($this->barang->getData(), []);

        // combination
        $num = count($barangs);
        $total = pow(2, $num);
        for ($i = 0; $i < $total; $i++) {
            for ($j = 0; $j < $num; $j++) {
                if (pow(2, $j) & $i)
                    $combinations[$i][] = $barangs[$j];
            }
        }

        foreach ($combinations as $combination) {
            $result = $associator->predict($combination);
            if ($result) {
                $predicts[] = $result;
            }
        }

        $collections = collect($predicts)->flatten()
            ->unique()
            ->reject(function($value) use ($barangs){
                return in_array($value, $barangs);
            })
            ->mapWithKeys(function($value){
                $values = explode('-', $value);
                return [$values[0] => $values[1]];
            })
            ->all();
        return redirect('simulasi')->with('result', ['predicts' => $collections, 'barangs' => $barangs]);
    }
}
