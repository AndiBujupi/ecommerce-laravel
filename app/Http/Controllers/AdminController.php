<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class AdminController extends Controller
{
    public function view_category(){

       $data=category::all();


        return view ('admin.category',compact('data'));
    }

    public function add_category(Request $request){

      $data=new category;

      $data->category_name=$request->category;

      $data->save();
      return redirect()->back()->with('message','Category added successfully');

    }

    public function delete_category($id){
        $data=category::find($id);
        $data->delete();

        return redirect()->back()->with('message','Data delete succesfully');

    }

    public function view_product(){


           $category=category::all();


        return view('admin.product',compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new Products;
    
        $product->title = $request->title;
        $product->descrition = $request->descrition;
        $product->category = $request->category;
        $product->quality = $request->quality;
        $product->price = $request->price;
        $product->discountPrice = $request->dis_price;
    
        $image = $request->image;
        // Get the image extension
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        // Move the image to the 'product' directory
        $request->image->move('product', $imagename);
        // Assign the image name to the product's image attribute
        $product->image = $imagename;
    
        // Save the product to the database
        $product->save();
    
        // Redirect back to the previous page
        return redirect()->back()->with('message','Product added succesfully');

    }
    
    public function show_product() { 
        $product = products::all();
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id){
        $product=products::find($id);
        $product->delete();

        return redirect()->back()->with('message','Product delete succesfully');

    }

    public function update_product($id){
         $product=products::find($id);
        
         $category=category::all();

         return view('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request ,$id){

        $product=products::find($id);
        $product->title=$request->title;

        $product->descrition = $request->descrition;
        $product->category = $request->category;
        $product->quality = $request->quality;
        $product->price = $request->price;
        $product->discountPrice = $request->dis_price;

        $image = $request->image;

        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
    
            $product->image = $imagename;
    
        }
       
        
        $product->save();
        
         return redirect()->back()->with('message','Product update succesfuly');




    }
    

}
