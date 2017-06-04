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
        return view('pages.simulasi', $data);
    }

    public function proses(Request $request)
    {
        $barangs = $request->barang;
        $min_conf = $this->setting->find('min_conf')->value;
        $min_sup = $this->setting->find('min_sup')->value;
        $labels = [];
        $associator = new Apriori($min_sup/100, $min_conf/100);
        $associator->train($this->barang->getData(), $labels);
        $predicts = $associator->predict($barangs);
        return redirect('simulasi')->with('result', ['predicts' => $predicts, 'barangs' => $barangs]);
    }
}
