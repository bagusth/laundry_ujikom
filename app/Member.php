<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tb_member';
    protected $primaryKey = 'id_member';
    protected $fillable = [
    	'nama','alamat','jenis_kelamin','tlp'
    ];

    /*  
    public function transaksi () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }
    */       
}
