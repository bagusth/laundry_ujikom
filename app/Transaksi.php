<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
    	'id_outlet','kode_invoice','id_member','tgl','batas_waktu','tgl_bayar','biaya_tambahan','diskon','pajak','status','dibayar','id_user'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */
}
