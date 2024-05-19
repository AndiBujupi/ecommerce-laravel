<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;

class HomeController extends Controller
{

    public function GetProductsInHome() {
        $product = Products::all();
       // $product = Products::paginate(3); nese dojm me i shfaq veq 3 produkte
        return view('user.home', compact('product'));
    }
    
    

    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype =='admin'){
            return view('admin.home');
        }
        else{
            return view('user.home');
        }
    }
}
