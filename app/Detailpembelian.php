<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailpembelian extends Model
{
    protected $table='detail_pembelian'; 
    protected $primaryKey='id_detail_pembelian';
    protected $fillable=['harga_satuan','jumlah_pembelian','total_harga','id_barang','id_pembelian'];
    //
}