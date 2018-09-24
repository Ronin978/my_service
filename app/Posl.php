<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posl extends Model
{
    protected $table="posl";
	protected $fillable=['posl', 'kst', 'vart', 'gar', 'myid', 'type'];
}
