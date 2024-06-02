<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\Cart;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
    
        if ($usertype == 'admin') {
            return view('admin.home');
        } else {
            return view('user.home');
        }
    }
    


    public function GetProductsInHome() {
        $product = Products::all();
       // $product = Products::paginate(3); nese dojm me i shfaq veq 3 produkte
        return view('user.home', compact('product'));
    }



    
    public function add_cart(Request $request ,$id){

        if(Auth::id()){

            $user=Auth::user();
            $product=Products::find($id);

            $cart=new Cart;

            $cart->name=$request=$user->name;
            $cart->email=$request=$user->email;
            $cart->address=$request=$user->address;
            $cart->user_id=$request=$user->id;
            $cart->phone=$request=$user->phone;

            $cart->product_title=$request=$product->title;
            
            if($product->discountPrice!=null){

                $cart->price=$request=$product->discountPrice;

            }
            else{
                $cart->price=$request=$product->price;
            }

            $cart->Product_id=$request=$product->id;
            $cart->quality=$request=$product->quality;
            $cart->image=$request=$product->image;

            $cart->save();

            return redirect()->back()->with('message','Product added to cart succesfully');

        }

        else{
            return redirect('login');
        }
   
    }

    public function productDetails(Request $request,$id){
      
        $product=Products::find($id);
        $category = $product->category;

        
        $productCategory = Products::where('category', $category)->get();

        return view('user.product_details',compact('product','productCategory'));
    }

    public function show_cart(){

        $id=Auth::user()->id;

        $cart=Cart::where('user_id',$id)->get();

        return view('user.showcart',compact('cart'));

    }

    public function remove_product($id){
        $cart=Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('message','Product delete succesfully');

    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $product = Products::where('title', 'LIKE', "%{$query}%")->get();
        return view('user.search-results', compact('product'));
        
    }
    


}
