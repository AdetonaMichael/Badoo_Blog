@extends('layouts.app')

@section('content')
<section class="bg-gray-white md:px-6  py-4 bg-gray-100">
  <div class="md:ml-20 md:mr-20 md:mb-10 bg-white p-5 border-1 border-gray-300 shadow-lg">
   <div class="w-2/5 m-auto text-gray-900 font-bold text-left">
     <div class="py-5 mb-10 border-b border-gray-20 text-center">
         <h1 class="text-3xl mt-15">
              {{$post->title}}
         </h1>
     </div>
   </div>
    
   <div class="md:flex viewimage items-center justify-center">
     <img  src="{{ asset('images/'.$post->image_path) }}" alt="blog post image">
   
 </div>
 <div class="2-4/5 m-atuo pt-20">
   <h3 class="text-gray-800 py-10 md:pl-20 bg-gray-300 border-b-2 border-t-2 pl-5 relative md:mx-20">
       By <span class=font-bold italic text-gray-800">
           {{ $post->user->name }}</span> Created on {{ date('jS M Y', strtotime($post->updated_at) ) }}
       </h3>
 
 
    <p class="text-xl text-gray-900 pt-8 px-5 pb-10 leading-8 font-light md:mx-20">
        {!! $post->description !!}
    </p>
   </div>
   <div class="about-author mb-20 px-5 bg-white justify-center rounded shadow-lg border mt-8 md:mx-20 border-gray-200">
     <h2 class="text-gray-600 font-extrabold text-xl text-left my-5">About the Author</h2>
        <div class="content-holder flex ">
          <div class="user-avatar  justify-center">
            <i class="hover:bg-blue-400 hover:text-blue-700 border-2 p-3 md:p-5 md:m-5 fas fa-user fa-3x  text-yellow-500"></i>
          </div>
 
          <div class="text-holder ml-5 my-2">
            <h2 class="text-gray-900 font-extrabold text-xl">{{ $post->user->name }}</h2>
            <p class="font-semibold my-2">{{ $post->user->about_me }} </p>            
          </div>
        </div>
    </div>
 
 </div>
 
    <div id="disqus_thread"></div>
 <script>
     /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
     /*
     var disqus_config = function () {
     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     */
     (function() { // DON'T EDIT BELOW THIS LINE
     var d = document, s = d.createElement('script');
     s.src = 'https://wildskin.disqus.com/embed.js';
     s.setAttribute('data-timestamp', +new Date());
     (d.head || d.body).appendChild(s);
     })();
 </script>
 <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
 
 
 </section>
<section>
  <div class=" py-15 bg-gray-200 box-shadow  shadow-lg rounded mb-5">
    <h2 class="text-center  text-gray-500 mb-10 font-bold text-4xl">You May Also like</h2>
    <div class="block justify-around md:flex owl-carousel owl-theme">

        <div class="box2 bg-pink-300 md:mx-5 rounded-lg">
            <div class="flex items-center justify-end">
           <img src="https://cdn.pixabay.com/photo/2021/06/10/22/14/stork-6327150_960_720.jpg" width=600 height=400 alt="api blog image">
            </div>
                <hr>
                <div class="relative bg-gray-500 justify-around p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2  style="font-size:xxx-large;" classs=" text-white text-5xl">25%</h2>
                        <p class="leading-snug text-gray-100"> Mapping Insight Score. Delight your Users and improve your Mapping Skills</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>

        <div class="box2 bg-pink-300 md:mx-5 rounded-lg">
            <div class="flex items-center justify-center">
              <img src="https://cdn.pixabay.com/photo/2019/09/17/18/48/computer-4484282_960_720.jpg" width=600 height=400 alt="blog api post">
            </div>
                <hr>
                <div class="relative bg-gray-500 justify-around p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2  style="font-size:xxx-large;" classs=" text-white text-5xl">25%</h2>
                        <p class="leading-snug text-gray-100"> Mapping Insight Score. Delight your Users and improve your Mapping Skills</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>

        <div class="box2 bg-pink-300 md:mx-5 rounded-lg">
            <div class="flex items-center justify-center">
            <img src="https://cdn.pixabay.com/photo/2014/02/13/07/28/wordpress-265132_960_720.jpg" width=600 height=400 alt="may also like blog image">
            </div>
                <hr>
                <div class="relative bg-gray-500 justify-around p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2  style="font-size:xxx-large;" classs=" text-white text-5xl">25%</h2>
                        <p class="leading-snug text-gray-100"> Mapping Insight Score. Delight your Users and improve your Mapping Skills</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>


    </div>
</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
<script>
  $('.owl-carousel').owlCarousel({
         loop: true,
         autoplay: true,
         slideTransition: 'linear',
         autoplaySpeed: 3000,
         items: 4

});

 </script>
 <script>
  $(document).ready(function(){
    $.getJSON("https://newsapi.org/v2/everything?q=bitcoin&apiKey=7929f0ff7afe4714bd2bb41c46405ba1", function(data){
         console.log(data);
         console.log(data.articles[]);
    });
  }); 
   </script>

@endsection