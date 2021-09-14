<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['id','name','description','price','slug'];

	public $incrementing = false;

    public function store(){
		return $this->belongsTo(Store::class);
	}

	public function categories(){
		return $this->belongsToMany(Category::class);
	}

	public function image(){
		return $this->morphMany(Image::class, 'imageable');
	}

}
