@extends('layouts.main')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Rule</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Data Rule
                        </div>
                        <div class="card-block">
                            <form action="{{url('url/proses')}}" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <input type="text" name="min_conf" class="form-control" placeholder="min confidence">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="min_sup" class="form-control" placeholder="min support">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Proses</button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Jika</th>
                                        <th>Maka</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Pompeius René</td>
                                    <td>2012/01/01</td>
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