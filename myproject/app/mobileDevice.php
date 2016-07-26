<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class mobileDevice extends Model {

	protected $table = 'mobile_devices';

	protected $fillable = ['imagePath','title','description','price'];

}
