@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15">
        <h1 class="text-6xl">{{ $post->title }}</h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-8">
    <div class="text-gray-500 mb-3">
        By <span class="font-bold italic text-gray-800"> {{ $post->user->name }} </span>, created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </div>   
    <p class="text-xl text-gray-700 pt-3 pb-3 my-4 leading-8 font-light  border border-gray-800 rounded-md">
        {{ $post->description }}
    </p>
    <img
        class="w-96 h-96"
        src="{{ asset('images/' . $post->image_path) }}" width="700" alt="">

</div>

<div class="w-4/5 m-auto my-8">
    <h2 class="text-2xl">Comments</h2>
    @comments(['model' => $post])
</div>

@endsection
