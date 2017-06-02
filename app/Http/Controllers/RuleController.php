<?php

namespace App\Http\Controllers;

class RuleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.rule');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function import()
    {

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
