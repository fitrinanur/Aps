@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Simulasi</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{url('simulasi/proses')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card-header">
                                Simulasi Pembelian
                            </div>
                            <div class="card-block">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <select id="multiple-select" name="barang[]" multiple class="form-control" size="40">
                                            @foreach($barangs as $barang)
                                                <option value="{{$barang->kode_barang.'-'.$barang->nama_barang}}">{{$barang->nama_barang}}</option>
                                            @endforeach
                                        </select>
                                        {{csrf_field()}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Hasil rekomendasi
                        </div>
                        <div class="card-block">
                            @if (session('result'))
                                <h4>Data Pembelian</h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(session('result')['barangs'] as $barang)
                                        <?php $row = explode('-', $barang)?>
                                        <tr>
                                            <td>{{$row[0]}}</td>
                                            <td>{{$row[1]}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <h4>Data Rekomendasi</h4>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(session('result')['predicts'] as $barang)
                                        @if(is_array($barang))
                                            @foreach($barang as $row)
                                                <?php $row = explode('-', $row)?>
                                                <tr>
                                                    <td>{{$row[0]}}</td>
                                                    <td>{{$row[1]}}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <?php $row = explode('-', $barang)?>
                                            <tr>
                                                <td>{{$row[0]}}</td>
                                                <td>{{$row[1]}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection