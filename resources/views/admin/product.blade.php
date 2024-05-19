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

    <h1 class="mb-4 text-4xl p-4 text-blue-600 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white">Add product</h1>

    <div class="grid w-full gap-6 md:grid-cols-2"> 
    
        <div >
           <form enctype="multipart/form-data" action="{{url('/add_product')}}" method="POST" class="max-w-full p-8">
        @csrf
        <br>
        <div class="relative z-0 w-full mb-5 group">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input required type="text" name="title" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
       </div>

       <div class="relative z-0 w-full mb-5 group">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrition</label>
        <input required type="text" name="descrition" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
   </div>
<div class="relative z-0 w-full mb-5 group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quality</label>
    <input required type="text" name="quality" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>

<div class="relative z-0 w-full mb-5 group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
    <input required type="number" name="price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>

<div class="relative z-0 w-full mb-5 group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discount price</label>
    <input  type="number" name="dis_price" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>

<div class="relative z-0 w-full mb-5 group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
    <select name="category" id="">
        <option value="" selected="">Add a catagory here</option>

        @foreach ($category as $category)
            

        <option value="{{$category->category_name}}">{{$category->category_name}}</option>

        @endforeach
    </select>
</div>

<div class="relative z-0 w-full mb-5 group">
    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product image</label>
    <input required type="file" name="image" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
</div>
          <button name="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
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