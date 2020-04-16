<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'tb_detail_transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'id_transaksi','id_paket','qty','keterangan'
    ];

    
    /*
    public function transaksi() {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }
    */   
     
    
}
