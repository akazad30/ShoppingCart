<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTable extends Model {

	protected $table = 'OrderTables';

	protected $fillable = ['order_id','book_id','amount','price','total'];

}
