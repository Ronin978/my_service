<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{

	protected $table="repair";
	protected $fillable=['date', 'type', 'status', 'no', 'pib', 'tel', 'adress', 'model', 'prod', 'maister', 'misze', 'other', 'users'];

}
