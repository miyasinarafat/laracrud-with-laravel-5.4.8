<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Crud extends Model
{
	use Searchable;
    /**
     * fillable array for data storing permission
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email'
        ];
}
