

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.script')
</head>
<body>



    @include('admin.header')

    @if(session()->has('message'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">
         
            {{session()->get('message')}} </span> 

            <button class="close" type="button" aria-label="Close alert">
                <span aria-hidden="true">×</span>
            </button>
            
      </div>
    @endif

    <h1 class="mb-4 text-4xl p-4 text-blue-600 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white">Update product</h1>

    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-left:250px">

        <div class="formclass" style="flex: 1; margin-right: 20px;">
            <div class="forma">
                <div class="grid w-full gap-6 md:grid-cols-2"> 
                    <div>
                        <form enctype="multipart/form-data" action="{{url('/update_product_confirm',$product->id)}}" method="POST" class="max-w-full p-8">
                            @csrf
                            <br>
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input value="{{$product->title}}"  type="text" name="title" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <input value="{{$product->descrition}}" type="text" name="descrition" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quality</label>
                                <input value="{{$product->quality}}" type="text" name="quality" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input value="{{$product->price}}" type="number" name="price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount price</label>
                                <input value="{{$product->discountPrice}}" required type="number" name="dis_price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                <select name="category" id="">
                                    <option value="{{$product->category}}" selected>{{$product->category}}</option>
                                    @foreach ($category as $category)
                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="relative z-0 w-full mb-5 group">
                                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change image</label>
                                <input  type="file" name="image" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
    
                            <button value="Update product" name="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update & Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
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
    



      <script>
        document.addEventListener('DOMContentLoaded', function () {
            const closeButtons = document.querySelectorAll('.close');
            
            closeButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const alert = this.parentElement;
                    alert.style.display = 'none';
                });
            });
        });
    </script>
    
</body>
</html>