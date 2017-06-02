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
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="card-header">
                            Simulasi Pembelian
                        </div>
                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <select id="multiple-select" name="barang" class="form-control" size="40">
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                        <option value="4">Option #4</option>
                                        <option value="5">Option #5</option>
                                        <option value="6">Option #6</option>
                                        <option value="7">Option #7</option>
                                        <option value="8">Option #8</option>
                                        <option value="9">Option #9</option>
                                        <option value="10">Option #10</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Proses</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection