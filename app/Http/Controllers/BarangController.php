<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Library\BarangImport;

class BarangController extends Controller
{
    private $barang;
    public function __construct(Barang $barang)
    {
        $this->middleware('auth');
        $this->barang = $barang;
    }

    public function index()
    {
        $data['barangs'] = $this->barang->orderBy('no_faktur')->paginate(30);
        return view('pages.barang', $data);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function import()
    {
        return view('pages.barang-import');
    }

    public function doImport(BarangImport $import)
    {
        $results = $import->get();
        Barang::truncate();
        Barang::insert($results->toArray());
        return redirect('barang')->with('status', 'Import barang berhasil');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
