<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'tb_paket';
    protected $primaryKey = 'id_paket';
    protected $fillable = [
    	'id_outlet','jenis','nama_paket','harga'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */ 
}
