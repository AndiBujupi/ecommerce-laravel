<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        @include('admin.script')



    </head>

    <style>

        .productImage{
            cursor: pointer;
        }
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }
    
    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    
    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }
    
    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption { 
        animation-name: zoom;
        animation-duration: 0.6s;
    }
    
    @keyframes zoom {
        from {transform: scale(0)} 
        to {transform: scale(1)}
    }
    
    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }
    
    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
    </style>
    <body class="font-sans antialiased">

               @include('user.header')


               @if(session()->has('message'))
               <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                   <span class="font-medium">
                    
                       {{session()->get('message')}} </span> 
           
                       <button class="close" type="button" aria-label="Close alert">
                           <span aria-hidden="true">×</span>
                       </button>
                       
                 </div>
               @endif

               @if($cart->isEmpty())

               <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">You have no products in your cart.</span>
              </div>

               <div style="justify-content: center; display:flex;">
               <p>No product added</p>
               </div>
               @else
        

      

               <div class="relative overflow-x-auto p-4" style="padding-right:100px; padding-top:50px;">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>                        
                                  
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                quantity
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
            <?php 
            $totalprice=0;
            ?>
                        @foreach ($cart as $cart)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cart->product_title }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cart->price }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $cart->quality }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="productImage" style="width:40px;" src="/product/{{ $cart->image }}" alt="Product Image" srcset="">
                            </th>
                            
                             <th class="px-6 py-4">
                                <a  href="{{ url('remove_product', $cart->id) }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</a>
                            
                            </th>
                      
                        <?php 
                        $totalprice=$totalprice + $cart->price
                        ?>
                          </tr> 
                        
                    @endforeach

                   
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                      </div>
        
        
                    
                    </tbody>
                    
                </table>
           
            <div style="width:83%;">
                <h1 style="text-align: right; " >total price: {{$totalprice}}</h1>
    
            </div>
            <div>
                <a href="{{url('cash_order')}}" type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Buy now</a>
            </div>
            
            </div>
            @endif
            <script>
                // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var images = document.querySelectorAll(".productImage");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        
        images.forEach(function(image) {
            image.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
        });
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
        
        
            </script>
        </body>