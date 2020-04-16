<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'tb_outlet';
    protected $primaryKey = 'id_outlet';
    protected $fillable = [
    	'nama','alamat','tlp'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */ 
}
