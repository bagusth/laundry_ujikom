<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
    	'nama','username','password','id_outlet','role'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */
}
