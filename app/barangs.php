<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class barangs extends Model
{

	public function user(){
		return $this->belongsToMany('App\User', 'peminjamans', 'id_user', 'id_barang');
	} 
}
