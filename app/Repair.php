<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{

	protected $table="repair";
	protected $fillable=['date', 'termin', 'nespr', 'type', 'status', 'no', 'pib', 'tel', 'adress', 'model', 'compl', 'prod', 'maister', 'misze', 'other', 'users'];

}
