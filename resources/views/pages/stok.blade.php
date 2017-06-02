@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Stok</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Stok Barang
                        </div>
                        <div class="card-block">
                            <a href="{{url('stok/import')}}" class="btn btn-primary" style="margin-bottom: 10px">Import Data Stok</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Barang</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>test</td>
                                    <td>5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection