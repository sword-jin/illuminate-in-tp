<?php 

namespace App\Models;

class User extends Model
{
	protected $table = 'users';

	public $timestamps = false;

	protected $fillable = [
		'name'
	];
}
