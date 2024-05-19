<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function productDetails($id){
        $product=products::find($id);

        return view('user.details',compact('product'));
    }
}
