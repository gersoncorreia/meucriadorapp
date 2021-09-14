<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $fillable = ['id','name','description','slug'];

	public $incrementing = false;

    public function user(){
		return $this->belongsTo(User::class);
	}

	public function products(){
		return $this->hasMany(Product::class);
	}

	public function image(){
		return $this->morphMany(Image::class, 'imageable');
	}

}
