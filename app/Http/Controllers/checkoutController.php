<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function __invoke(){
        return view('Flujo.checkout');
    }
}
