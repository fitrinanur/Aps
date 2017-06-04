<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['kode_barang', 'no_faktur', 'qty', 'nama_barang'];

    public function getData()
    {
        $data = Barang::groupBy('no_faktur')->selectRaw('group_concat(nama_barang) as group_nama_barang, group_concat(kode_barang) as group_kode_barang')
            ->get()->map(function($row) {
                $group_nama_barang = explode(',',$row['group_nama_barang']);
                $group_kode_barang = explode(',',$row['group_kode_barang']);
                $data = [];
                foreach ($group_nama_barang as $key => $value) {
                    $value = trim($value);
                    $kode = trim($group_kode_barang[$key]);
                    $data[] = "$kode-$value";
                }
                return array_values(array_sort($data, function($value) {
                    return $value;
                }));
            })->toArray();
        return $data;
    }
}
