<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    protected  $fillable=[
        'first_name',
        'Last-name',
        'phone',
        'City',
    ];
}
