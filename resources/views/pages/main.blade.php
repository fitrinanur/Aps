@extends('layouts.main')
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-block">
                       <h2>Sistem Rekomendasi Barang untuk Pembelian Stok</h2>
                       <p>Selamat datang, sistem rekomendasi barang berfungsi sebagai referensi dalam membantu admin menentukan pembelian stok dengan adanya rekomendasi barang berdasarkan pola pembelian konsumen.</p>
                        <p><bold>Tutorial : </bold></p>
                       <ol>
                           <li>Masukan data transaksi sebagai data training dengan cara import file <i>excel</i> menggunakan <i>extensi .csv</i> pada menu Master-Penjualan Barang</li>
                           <li>Atur <i>Minimum Support</i> dan <i>Minimum Confidence</i> pada menu Analisa-Rule</li>
                           <li>Menu simulasi digunakan penemuan rekomendasi yang sesuai dengan rule yang ada</li>
                       </ol>

                   </div>
               </div>
           </div>
        </div>
        <!--/.row-->
    </div>
</div>
@endsection
