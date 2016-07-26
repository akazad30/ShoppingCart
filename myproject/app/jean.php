<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class jean extends Model {

	protected $table ='jeans';
	protected $fillable = ['imagePath','title','description','price'];

}
