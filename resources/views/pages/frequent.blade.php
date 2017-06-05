@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Frequent</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Frequent
                        </div>
                        <div class="card-block">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Freq Item</th>
                                        <th>Support</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($freqs as $freq)
                                    <tr>
                                        <td>{{$freq->kode_barang}}</td>
                                        <td>{{$freq->nama_barang}}</td>
                                        <td>{{$freq->freq}}</td>
                                        <td>{{$freq->support}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection