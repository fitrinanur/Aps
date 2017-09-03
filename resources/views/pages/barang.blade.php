@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Penjualan Barang</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Penjualan Barang
                        </div>
                        <div class="card-block">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <a href="{{url('barang/import')}}" class="btn btn-primary" style="margin-bottom: 10px">Import Data</a>
                            <a href="{{url('barang/export')}}" class="btn btn-primary" style="margin-bottom: 10px">Export Data (csv)</a>
                                <form action="{{url('barang')}}" method="get" class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label" for="input-small">Pencarian</label>
                                        <div class="col-sm-6">
                                            <input type="text" id="input-small" name="search" class="form-control input-sm" value="{{$search}}">
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-success">cari</button>
                                        </div>
                                    </div>
                                </form>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No Faktur</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td>{{$barang->no_faktur}}</td>
                                        <td>{{$barang->kode_barang}}</td>
                                        <td>{{$barang->nama_barang}}</td>
                                        <td><a href="{{url('barang/edit/' . $barang->id)}}">edit</a> | <a href="{{url('barang/delete/' . $barang->id)}}">delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $barangs->links('vendor.pagination.bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection