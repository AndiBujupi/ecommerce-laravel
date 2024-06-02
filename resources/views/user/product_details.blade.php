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


               <section class="relative ">
                <div class="w-full mx-auto px-4 sm:px-6 lg:px-0">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mx-auto max-md:px-2 ">
                        <div class="img">
                            <div class="img-box h-full max-lg:mx-auto ">
                                <img  src="/product/{{$product->image}}"  alt="Yellow Tropical Printed Shirt image"
                                    class="max-lg:mx-auto lg:ml-auto h-full">
                            </div>
                        </div>
                        <div
                            class="data w-full lg:pr-8 pr-0 xl:justify-start justify-center flex items-center max-lg:pb-10 xl:my-2 lg:my-5 my-0">
                            <div class="data w-full max-w-xl">
                                <p class="text-lg font-medium leading-8 text-indigo-600 mb-4 first-letter:uppercase"> {{$product->category}}
                                </p>
                                <h2 class="font-manrope font-bold text-3xl leading-10 text-gray-900 mb-2 capitalize">{{$product->title}}</h2>
                                <div class="flex flex-col sm:flex-row sm:items-center mb-6">
                                    <h6
                                        class="font-manrope font-semibold text-2xl leading-9 text-gray-900 pr-5 sm:border-r border-gray-200 mr-5">
                                        {{$product->price}} € </h6>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center gap-1">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_12029_1640)">
                                                    <path
                                                        d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                        fill="#FBBF24" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_12029_1640">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_12029_1640)">
                                                    <path
                                                        d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                        fill="#FBBF24" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_12029_1640">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_12029_1640)">
                                                    <path
                                                        d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                        fill="#FBBF24" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_12029_1640">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_12029_1640)">
                                                    <path
                                                        d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                        fill="#FBBF24" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_12029_1640">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8480_66029)">
                                                    <path
                                                        d="M9.10326 2.31699C9.47008 1.57374 10.5299 1.57374 10.8967 2.31699L12.7063 5.98347C12.8519 6.27862 13.1335 6.48319 13.4592 6.53051L17.5054 7.11846C18.3256 7.23765 18.6531 8.24562 18.0596 8.82416L15.1318 11.6781C14.8961 11.9079 14.7885 12.2389 14.8442 12.5632L15.5353 16.5931C15.6754 17.41 14.818 18.033 14.0844 17.6473L10.4653 15.7446C10.174 15.5915 9.82598 15.5915 9.53466 15.7446L5.91562 17.6473C5.18199 18.033 4.32456 17.41 4.46467 16.5931L5.15585 12.5632C5.21148 12.2389 5.10393 11.9079 4.86825 11.6781L1.94038 8.82416C1.34687 8.24562 1.67438 7.23765 2.4946 7.11846L6.54081 6.53051C6.86652 6.48319 7.14808 6.27862 7.29374 5.98347L9.10326 2.31699Z"
                                                        fill="#F3F4F6" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8480_66029">
                                                        <rect width="20" height="20" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
        
                                        </div>
                                        <span class="pl-2 font-normal leading-7 text-gray-500 text-sm ">1624 review</span>
                                    </div>
        
                                </div>
                                <p class="text-gray-500 text-base font-normal mb-5">
                                    {{$product->descrition}}
                                </p>
                                {{-- <ul class="grid gap-y-4 mb-8">
                                    <li class="flex items-center gap-3">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="26" height="26" rx="13" fill="#4F46E5" />
                                            <path
                                                d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                                stroke="white" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                        <span class="font-normal text-base text-gray-900 ">Branded shirt</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="26" height="26" rx="13" fill="#4F46E5" />
                                            <path
                                                d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                                stroke="white" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                        <span class="font-normal text-base text-gray-900 ">3 color shirt</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="26" height="26" rx="13" fill="#4F46E5" />
                                            <path
                                                d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                                stroke="white" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                        <span class="font-normal text-base text-gray-900 ">Pure Cotton Shirt with 60% as
                                            40%</span>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="26" height="26" rx="13" fill="#4F46E5" />
                                            <path
                                                d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                                stroke="white" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                        <span class="font-normal text-base text-gray-900 ">all size is available</span>
                                    </li>
                                </ul> --}}
                                {{-- <p class="text-gray-900 text-lg leading-8 font-medium mb-4">Size</p>
                                <div class="w-full pb-8 border-b border-gray-100 flex-wrap">
                                    <div class="grid grid-cols-3 min-[400px]:grid-cols-5 gap-3 max-w-md">
                                        <button
                                            class="bg-white text-center py-1.5 px-6 w-full font-semibold text-lg leading-8 text-gray-900 border border-gray-200 flex items-center rounded-full justify-center transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-100 hover:border-gray-300 visited:border-gray-300 visited:bg-gray-50">S</button>
                                        <button
                                            class="bg-white text-center py-1.5 px-6 w-full font-semibold text-lg leading-8 text-gray-900 border border-gray-200 flex items-center rounded-full justify-center transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-100 hover:border-gray-300 visited:border-gray-300 visited:bg-gray-50">M</button>
                                        <button
                                            class="bg-white text-center py-1.5 px-6 w-full font-semibold text-lg leading-8 text-gray-900 border border-gray-200 flex items-center rounded-full justify-center transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-100 hover:border-gray-300 visited:border-gray-300 visited:bg-gray-50">L</button>
                                        <button
                                            class="bg-white text-center py-1.5 px-6 w-full font-semibold text-lg leading-8 text-gray-900 border border-gray-200 flex items-center rounded-full justify-center transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-100 hover:border-gray-300 visited:border-gray-300 visited:bg-gray-50">XL</button>
                                        <button
                                            class="bg-white text-center py-1.5 px-6 w-full font-semibold text-lg leading-8 text-gray-900 border border-gray-200 flex items-center rounded-full justify-center transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-100 hover:border-gray-300 visited:border-gray-300 visited:bg-gray-50">XXL</button>
        
                                    </div>
        
                                </div> --}}
        
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 py-8">
                                    <div class="flex sm:items-center sm:justify-center w-full">
                                        <button
                                            class="group py-4 px-6 border border-gray-400 rounded-l-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                            <svg class="stroke-gray-900 group-hover:stroke-black" width="22" height="22"
                                                viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.5 11H5.5" stroke="" stroke-width="1.6" stroke-linecap="round" />
                                                <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                                <path d="M16.5 11H5.5" stroke="" stroke-opacity="0.2" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                            </svg>
                                        </button>
                                        <input type="text"
                                            class="font-semibold text-gray-900 cursor-pointer text-lg py-[13px] px-6 w-full sm:max-w-[118px] outline-0 border-y border-gray-400 bg-transparent placeholder:text-gray-900 text-center hover:bg-gray-50"
                                            placeholder="1">
                                        <button
                                            class="group py-4 px-6 border border-gray-400 rounded-r-full bg-white transition-all duration-300 hover:bg-gray-50 hover:shadow-sm hover:shadow-gray-300">
                                            <svg class="stroke-gray-900 group-hover:stroke-black" width="22" height="22"
                                                viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11 5.5V16.5M16.5 11H5.5" stroke="#9CA3AF" stroke-width="1.6"
                                                    stroke-linecap="round" />
                                                <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                                    stroke-width="1.6" stroke-linecap="round" />
                                                <path d="M11 5.5V16.5M16.5 11H5.5" stroke="black" stroke-opacity="0.2"
                                                    stroke-width="1.6" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                    
                        <form action="{{url('add_cart',$product->id)}}"  method="POST">
                            @csrf
                                    <button 
                                        class="group py-4 px-5 rounded-full bg-indigo-50 text-indigo-600 font-semibold text-lg w-full flex items-center justify-center gap-2 transition-all duration-500 hover:bg-indigo-100">
                                        <svg class="stroke-indigo-600 " width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.7394 17.875C10.7394 18.6344 10.1062 19.25 9.32511 19.25C8.54402 19.25 7.91083 18.6344 7.91083 17.875M16.3965 17.875C16.3965 18.6344 15.7633 19.25 14.9823 19.25C14.2012 19.25 13.568 18.6344 13.568 17.875M4.1394 5.5L5.46568 12.5908C5.73339 14.0221 5.86724 14.7377 6.37649 15.1605C6.88573 15.5833 7.61377 15.5833 9.06984 15.5833H15.2379C16.6941 15.5833 17.4222 15.5833 17.9314 15.1605C18.4407 14.7376 18.5745 14.0219 18.8421 12.5906L19.3564 9.84059C19.7324 7.82973 19.9203 6.8243 19.3705 6.16215C18.8207 5.5 17.7979 5.5 15.7522 5.5H4.1394ZM4.1394 5.5L3.66797 2.75"
                                                stroke="" stroke-width="1.6" stroke-linecap="round" />
                                        </svg>
                                        Add to cart</button>
                        </form>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button
                                        class="group transition-all duration-500 p-4 rounded-full bg-indigo-50 hover:bg-indigo-100 hover:shadow-sm hover:shadow-indigo-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                            fill="none">
                                            <path
                                                d="M4.47084 14.3196L13.0281 22.7501L21.9599 13.9506M13.0034 5.07888C15.4786 2.64037 19.5008 2.64037 21.976 5.07888C24.4511 7.5254 24.4511 11.4799 21.9841 13.9265M12.9956 5.07888C10.5204 2.64037 6.49824 2.64037 4.02307 5.07888C1.54789 7.51738 1.54789 11.4799 4.02307 13.9184M4.02307 13.9184L4.04407 13.939M4.02307 13.9184L4.46274 14.3115"
                                                stroke="#4F46E5" stroke-width="1.6" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
        
                                    </button>
                                    <button
                                        class="text-center w-full px-5 py-4 rounded-[100px] bg-indigo-600 flex items-center justify-center font-semibold text-lg text-white shadow-sm transition-all duration-500 hover:bg-indigo-700 hover:shadow-indigo-400">
                                        Buy Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                                                    

       

{{-- 
               <div style="width: 1000px; display: flex; justify-content: space-around; align-items: flex-start; padding-top:150px; padding-bottom:40px;">
                <div style="flex: 1; margin-right: 20px;">
                    <img style="width: 100%; max-width: 800px;" src="/product/{{$product->image}}" alt="">
                </div>
                <div style="flex: 1; max-width: 400px;">

                  
                    <ul class="list-disc" style="padding-left:290px; padding-top:120px; width:800px;">
                        <h1 class="font-semibold mb-4 text-3xl text-blue-700 dark:text-blue-800 leading-none tracking-tight md:text-2xl lg:text-2xl dark:text-white">
                            Title: {{$product->title}}
                        </h1>
                        <h1 class="font-semibold mb-4 text-3xl text-blue-700 dark:text-blue-500 leading-none tracking-tight md:text-2xl lg:text-2xl dark:text-white">
                            Description: {{$product->descrition}}
                        </h1>
                        <h1 class="font-semibold mb-4 text-3xl text-blue-700 dark:text-blue-500 leading-none tracking-tight md:text-2xl lg:text-2xl dark:text-white">
                            Price: {{$product->price}}
                        </h1>
                        <h1 class="font-semibold mb-4 text-3xl text-blue-700 dark:text-blue-500 leading-none tracking-tight md:text-2xl lg:text-2xl dark:text-white">
                            Category: {{$product->category}}
                        </h1>

                        <form action="{{url('add_cart',$product->id)}}"  method="POST">
                            @csrf
                    
          
                          <input value="Add to cart" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
          
                      </form>
                    </ul>
                </div>
            </div> --}}
            <hr>


            <h1 class="pt-10 pl-10 font-semibold mb-4 text-3xl text-blue-700 dark:text-blue-500 leading-none tracking-tight md:text-2xl lg:text-2xl dark:text-white">
                Similar products
            </h1>
            <div  style="display:flex; justify-content:center; padding-top:50px;">
                <div class="grid gap-4 grid-cols-5 grid-rows-5 justify-center">
                


                @foreach ($productCategory as $products)
                <div    style="margin-top:60px; margin:20px; width:230px; display:flex; flex-direction:column; justify-content:space-between;" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('productDetails',$products->id)}}">
                    <div style="width:100%; height:230px; overflow:hidden;">
                        <img class="w-full h-full object-cover" src="/product/{{$products->image}}" alt="product image" />
                    </div>
                </a>
                <div class="flex-grow px-5 pb-5">
                   <a href="{{ url('productDetails',$products->id)}}">
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
                          <form action="{{url('add_cart',$products->id)}}" method="POST">
                              @csrf
            
                            <input value="Add to cart" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
            
                        </form>
                      </div>
                  @else 
              
                      <div class="flex items-center justify-between mt-2">
                          <span class="text-2xl font-bold text-black-900 dark:text-white">$ {{$products->price}}</span>
                      <form action="{{url('add_cart',$products->id)}}"  method="POST">
                            @csrf
                    
          
                          <input value="Add to cart" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"></input>
          
                      </form>
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


    

    
            @include('user.footer')
    
    </body>
</html>
