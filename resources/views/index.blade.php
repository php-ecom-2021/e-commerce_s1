@extends('layouts.app')

@section('content')
<div 
    class="grid grid-cols-1 m-auto w-full py-40 bg-dunes bg-cover bg-center"
    style="background-image: url('https://cdn.pixabay.com/photo/2015/07/28/21/58/student-865073_1280.jpg')">
    <div class="flex text-gray-100">
        <div class="m-auto pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
                Read blog
            </h1>
            
            <p class="pb-10 font-thin pt-6">
                Check latest blogs
            </p>

            <a  
                href="/blog"
                class="px-8 py-4 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
                Read Now
            </a>
        </div>
    </div>
</div>

<div 
    class="grid grid-cols-1 m-auto w-full py-40 bg-dunes bg-cover bg-center"
    style="background-image: url('https://cdn.pixabay.com/photo/2020/12/18/16/56/laptop-5842509__480.jpg')">
    <div class="flex text-gray-100">
        <div class="m-auto pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
                Shop items
            </h1>
            
            <p class="pb-10 font-thin pt-6">
                Get items for the cheapest price
            </p>

            <a  
                href="/shop"
                class="px-8 py-4 text-l uppercase text-white font-bold bg-blue-600 rounded-full w-full">
                Shop Now
            </a>
        </div>
    </div>
</div>

@endsection