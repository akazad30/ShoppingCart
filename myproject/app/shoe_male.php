<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class shoe_male extends Model {

	protected $table = 'shoe_males';
	protected $fillable = ['imagePath','title','description','price'];

}
