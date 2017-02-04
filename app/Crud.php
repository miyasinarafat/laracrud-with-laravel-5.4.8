<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
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
