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



    <h1 class="mb-4 text-4xl p-4 text-blue-600 dark:text-blue-500  leading-none tracking-tight  md:text-2xl lg:text-3xl dark:text-white">Add category</h1>

<div class="grid w-full gap-6 md:grid-cols-2"> 

    <div style="padding-left:100px; ">
       <form action="{{url('/add_category')}}" method="POST" class="max-w-md p-8">
    @csrf
    <br>
    <div class="relative z-0 w-full mb-5 group">
      
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">category</label>
        <input required type="text" name="category" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
         </div>
      <button name="submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
  </div>



  <div class="relative overflow-x-auto p-4" style="padding-right:100px; padding-top:50px; "   >
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Category name
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                
               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 {{$data->category_name}}
                </th>
                <td class="px-6 py-4">
                    <a onclick="return confirm('Are you sure you want to delete this data!')" href="{{url('delete_category',$data->id)}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                </td>
         
              </tr>
            @endforeach
        </tbody>
    </table>
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