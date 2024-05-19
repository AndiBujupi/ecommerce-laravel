


@include('admin.script')
<div  style="display:flex; justify-content:center">
<div class="grid gap-4 grid-cols-5 grid-rows-5 justify-center">

    @foreach ($product as $products)
      <div  style="margin-top:60px; margin:20px; width:230px; display:flex; flex-direction:column; justify-content:space-between;" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
          <div style="width:100%; height:230px; overflow:hidden;">
              <img class="w-full h-full object-cover" src="/product/{{$products->image}}" alt="product image" />
          </div>
      </a>
      <div class="flex-grow px-5 pb-5">
         <a href="#">
             <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $products->title }}</h5>
             <h1>{{$products->descrition}}</h1>
         </a>
    
         <h1>Category: {{$products->category}}</h1>
         <div class="flex items-center mt-2.5 mb-5">
             <div class="flex items-center space-x-1 rtl:space-x-reverse">
                 <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                     <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                 </svg>
                 <!-- Add other star SVGs here -->
             </div>
             <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
         </div>
      </div>
      <div class="px-3 pb-3 mt-auto">
        <div>
            @if ($products->discountPrice > 0)
            <span class="text-2xl font-bold text-red-900 dark:text-white line-through decoration-extra-thick">$ {{$products->price}}</span>
        
            <div class="flex items-center justify-between mt-2">
                <span class="text-2xl font-bold text-green-900 green:text-white">$ {{$products->discountPrice}}</span>
                <a href="{{ url('details',$products->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        @else 
            <div class="flex items-center justify-between mt-2">
                <span class="text-2xl font-bold text-black-900 dark:text-white">$ {{$products->price}}</span>
                <a href="{{ url('details',$products->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
            </div>
        @endif
        
         </div>
        
      </div>
      </div>
    @endforeach

    
  {{-- kjo lidhet $product = Products::paginate(3) te home controlleri psh na shfaq 3 produkte edhe shigjetata per page tjt
     {!!$product->appends(reques::all())->links()!!}
     
      kjo asht me bootstrapstyle   {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}  --}}


   
 
   

  

    
</div>
</div>