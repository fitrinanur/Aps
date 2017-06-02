<?php

namespace App\Http\Controllers;

class StokController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.stok');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function import()
    {
        return view('pages.stok-import');
    }

    public function doImport()
    {

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
