<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactoMail;

class mailController extends Controller
{
    public function store(Request $request){
        
        $message = request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        Mail::to('blueberryweb7@gmail.com')->queue(new contactoMail($message));
        return redirect()->back();
    }
}
