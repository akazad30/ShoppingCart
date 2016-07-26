<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class shirt extends Model {

	protected $table ='shirts';
	protected $fillable =['imagePath','title','description','price'];

}

 