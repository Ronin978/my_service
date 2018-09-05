<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selling extends Model
{

    protected $table="selling";
	protected $fillable=['misze', 'name', 'article', 'metric', 'price', 'opt', 'remain', 'realization','zamovl', 'users'];
}
