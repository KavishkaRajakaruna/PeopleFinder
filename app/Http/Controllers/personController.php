<?php

namespace App\Http\Controllers;

use App\person;
use Illuminate\Http\Request;

class personController extends Controller
{
    public function show(Person $person){
        return $person;
    }
}
