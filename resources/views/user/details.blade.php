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



    </head>
    <body class="font-sans antialiased">

   
 
               @include('user.header')
       

                
        <div class="mobiledetials" style="flex: 1; ">
            <div >
             <div>
                 <img style="width:400px" src="/product/{{$product->image}}" alt="">
             </div>

             <ul class="list-disc">
                <li class="mb-4 text-1xl  text-blue-700 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white"">Title:{{$product->title}}</li>
                 <li class="mb-4 text-1xl  text-blue-700 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white"">Description:{{$product->descrition}}</li>
                 <li class="mb-4 text-1xl  text-blue-700 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white"">Price:{{$product->price}}</li>
                 <li class="mb-4 text-1xl  text-blue-700 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white"">Category:{{$product->category}}</li>
              </ul>
            </div>

           </div>
    </div>
  
                 
    </body>
</html>
