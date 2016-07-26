<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class shoe_female extends Model {

	protected $table ='shoe_females';
	protected $fillable = ['imagePath','title','description','price'];

}
