@extends('layouts.app')
@section('content')
    <div class="hero-bg-image pt-3 flex flex-col text-center items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">Welcome to my blog</h1>
        <a href="/" class="bg-gray-100 text-gray-700  py-4 px-5 rounded-lg font-bold uppercase text-l">start Reading</a>
    </div>
    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
        </div>
        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase ">How to be expert in 2023</h2>
            <p class="font-bold text-gray-600 text-xl pt-2">you can find list of all programing languages here</p>
            <p class="py-4 text-gray-500 text-sm leading-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero sit, dolore eos assumenda esse molestiae, quidem ipsum nihil alias provident doloremque neque iure nobis saepe sapiente accusantium hic nulla voluptate.</p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/">Read More</a>
        </div>
    </div>
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <span class="hover:text-gray-900 transtion duration-300 font-bold text-2xl py-2 block">Ux Design Thinking</span>
            <span class="hover:text-gray-900 transtion duration-300 font-bold text-2xl py-2 block">Programming Language</span>
            <span class="hover:text-gray-900 transtion duration-300 font-bold text-2xl py-2 block">Graphic Design</span>
            <span class="hover:text-gray-900 transtion duration-300 font-bold text-2xl py-2 block">Front-end-Devlopment </span>
        </div>
    </div>
    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">Recent Post</h2>
        <p class="text-gray-400 leading-6 px-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, optio dolorem! Aperiam, facilis. Libero possimus reiciendis, placeat voluptatibus vel ratione harum iste, odio magni consequuntur eum, sequi ex officiis! Doloremque?</p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 p-5 text-yellow-700 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition durantion-300"><a href="/">Php</a></li>
                    <li class="bg-yellow-100 p-5 text-yellow-700 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition durantion-300"><a href="/">Programming </a></li>
                    <li class="bg-yellow-100 p-5 text-yellow-700 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition durantion-300"><a href="/">Languages</a></li>
                    <li class="bg-yellow-100 p-5 text-yellow-700 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition durantion-300"><a href="/">Php</a></li>
                </ul>
                <h3 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptate nobis, asperiores ipsa, modi deleniti atque cumque porro culpa, temporibus fugit iusto? Id aliquid earum nobis, voluptatibus eaque reprehenderit error.
                </h3>
                <a class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block" href="">Read More</a>
            </div>
        </div>
        <div class=" flex">
            <img class="oject-cover" src="https://picsum.photos/id/239/960/620" alt="">
        </div>
    </div>
@endsection
