@extends('layouts.app')
@section('content')
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
    <div class="flex">
        <img class="object-cover" src="/images/{{$post->image_path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl md:p-0 py-5">{{$post->title}}</h2>
        <span>
            By:<span class="block text-gray-500 italic">{{$post->user->name}}</span>
            On:<span class="block text-gray-500 italic">{{$post->created_at->format('Y-m-d')}}</span>
            <p class="text-l text-gray-700 py-8 leading-8">{{$post->description}}</p>
        </span>
    </div>
    @if(Auth::user()&& Auth::user()->id== $post->user_id)
     <a href="{{route('blog.edit',['post'=>$post->id])}}" class="bg-green-700 text-green-100 py-4 px-5 mt-6 inline-block rounded-lg font-bold uppercase text-l place-self-start">Edit Post</a>
     <form class="inline-block" action="{{route('blog.destroy',['post'=>$post->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button class="bg-red-700 text-green-100 py-4 px-5 mt-6 inline-block rounded-lg font-bold uppercase text-l place-self-start" type="submit">Delete Post</button>
     </form>
     @endif
</div>
@endsection
