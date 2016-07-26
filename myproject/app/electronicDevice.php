<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class electronicDevice extends Model {

	protected $table = 'electronic_devices';
	protected $fillable = ['imagePath','title','description','price'];

}
