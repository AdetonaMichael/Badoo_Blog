@extends('layouts.app')

@section('content')
<section class="bg-white p-6">
        <div class="banner md:h-64 pt-8 md:mt-10 pb-16  block text-center space-y-10">
            <h1 id="hero-caption" class="text-white md:text-right mt-12  md:mr-40 shadow-lg-outline-pink text-6xl uppercase font-bold text-shadow-md pb-3  font-mono">
                Badoo Blog
            </h1>

        </div>

  <div class="mainsection_and_sidebar_holder  md:grid md:grid-cols-3">
  <div class="mainsection_holder md:col-span-2 ">
    <a href="https://www.whogohost.com/host/aff.php?aff=4244&page=sitebuilder" target="_blank"><img src="https://www.whogohost.com/images/affiliates/728x90e.png" /></a>
      @if(session()->has('message'))
      <div class="w-4/5 m-auto mt-10 pl-2 text-center">
         <p class="mb-4 text-gray-50 h-20 w-60 bg-green-400 rounded-2xl py-4">
              {{ session()->get('message') }}
         </p>
      </div>
   @endif
     @if (Auth::check())
       <div class="pt-15 w-4/5 m-auto animate-bounce">
         <a href="/blog/create" class="bg-pink-500 hover:bg-pink-600 uppercase px-5 bg-transparent text-gray-100 text-xs font-extrabold py-3 rounded-3xl">Create Post <i class="fas fa-pen fa-2x"></i></a>
       </div>
     @endif
    {{-- Carousel section  --}}
   
    {{-- Content Section --}}
   <div class="h-min-screen py-5 bg-gray-200  my-10 rounded-2xl">
    {{-- Posts --}}
    @foreach($posts as $post)
    <div class="bg-white mx-5 md:mx-10 p-5 my-10 grid grid-cols-1 md:grid-cols-2 ">
  <div class=" p-10 md:flex">
     <div class="image">
      <img src="{{ asset('images/'.$post->image_path) }}" alt="blog post image">
     </div>
  </div>
  
     <div class="postcontent md:mt-5 space-y-5 items-center md:ml-5 justify-center">
        <h2 class="text-gray-700 font-bold text-3xl pb-4">    {{ $post->title }}</h2>
        <span class="text-red-600">
          <span class="font-bold italic text-blue-600">Written by {{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at) ) }}
       </span>
        <p class="text-xl text-gray-700 leading-8 font-light">{!! $post->short_description !!}</p>
        <div class="items-center flex float-start">
          <a href="/blog/{{ $post->slug}}" class="uppercase bg-blue-500 text-gray-100 rounded text-xs font-extrabold py-2 px-4">
            <span class="flex">Keep Reading<i class="fa fa-arrow-right pl-2"> </i><span>
        </a>
        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
            <span>
              <a href="/blog/{{ $post->slug }}/edit" class=" pr-3 bg-yellow-400 px-4 py-1 rounded mx-2 hover:bg-yellow-300">Edit</a>
            </span>
            <span>
              <form action="/blog/{{ $post->slug }}" method="POST" >@csrf
                @method('delete')
                <button class="text-white pr-3 bg-red-700 px-4 py-2 rounded mx-2 hover:bg-red-600" type="submit">Delete</button>
              </form>
            </span>
        @endif
         </div>
      </div>
      <hr/>
  {{-- </div> --}}
  </div>
  @endforeach
 
  </div>



  <div class="mypagination my-5 font-bolder md:mx-20 ">{{ $posts->links() }}</div>
</div>
<div class="sidebar_holder h-min-screen bg-gray-400 py-5 my-10">
<div class="sidebar-1 bg-white mx-5 md:mx-10 p-5 text-center font-bold mb-2">
  <p class="sidebar_title_1">Video Of The Week</p>

</div>
<div class="sizecontroller mx-5  md:mx-10 py-5  ">
  <div class="videowrapper bg-white p-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/d1phF7Q7t4M?controls=0&amp;start=33" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>

  <div class="sidebar-1 bg-white mx-5 md:mx-10 p-5 text-center font-bold mb-2">
    <p class="sidebar_title_1">Trending</p>
     
  </div>
</div>
  
 




@endsection