<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetto extends Model
{
    //
    /* protected $table = 'fumettos'; */
    protected $fillable = [
        'title',
        'description',
        'series',
        'type',
        'price',
        'slug',
        'thumb',
        'sale_date'
       
    ];
}
