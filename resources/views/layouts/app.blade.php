<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--- CDN and external links ---->
   


    <!--- END OF CDN and external links --->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js\tinymce\js\tinymce\tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table media',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Cyberlord'
        });
        tinymce.init(editor_config);
      </script>
    <!-- Styles -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" href="{{ URL::asset('/images/geocipher3.jpg') }}" type="image/x-icon"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>
                <div>
                  
                </div>
                <nav  style="z-index:1;" class="bg-pink-700 bold uppercasegit fixed left-0 shadow-2xl right-0">
                    {{-- navbar goes here --}}
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between">
                    
                    <div class="flex space-x-4">
                    {{-- logo comes here --}}
                    <div class="mr-3 flex items-center text-white">
                        <a href="/" class="flex ">
                            <svg  width="65" height="65" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="blog" class="svg-inline--fa fa-blog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"></path></svg>
                        <span>  <a href="{{ url('/') }}" class="font-extrabold  text-2xl">
                            {{ config('app.name', 'Olamide') }}
                        </a></span>
                      
                        </a>
                    </div>
                    
                    {{-- primary nav here --}}
                    <div class="md:flex hidden items-center space-x-3">
                        <a class="px-3 text-gray-400 hover:text-gray-000 " href="/blog">Blog</a>
                        <a class="px-3 text-gray-400 hover:text-gray-000 " href="/about">About</a>
                
                    </div>
                    </div>
                    {{-- secondary nav --}}
                    <div class="md:flex hidden items-center space-x-1">
                        @guest
                        <a class="py-5 px-3 font-bold text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-white bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    {{-- mobile button goes here --}}
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                    <svg  class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><title>menu</title><g fill="none" class="nc-icon-wrapper"><path d="M6 36h36v-4h-36v4z m0-10h36v-4h-36v4z m0-14v4h36v-4h-36z" fill="#fff"></path></g></svg>
                        </button>
                    </div>
                    </div>
                    </div>
                    {{-- mobile menu --}}
                    <div class="mobile-menu border-b-2 border-gray-400 hidden md:hidden pb-5">
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100" href="/blog">Blog</a>
                        <a  class="block py-4 px-4 text-sm hover:bg-gray-100" href="/about">About</a>
                        @guest
                        <a class="py-5 px-3 font-bold  md:text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="py-3 px-3 font-bold  bg-yellow-400 transition duration-300 hover:text-yellow-800 text-yello-900 hover:bg-yellow-300 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                            <span class="text-white bold">{{ Auth::user()->name }}</span>
    
                            <a  href="{{ route('logout') }}"
                               class="no-underline  hover:bg-yellow-300 bg-yellow-400 py-2 px-2 rounded bold"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                    </nav>
              
        </header>
         <div>
            @yield('content')
         </div>
        <div>
            @include('layouts.footer')
        </div>
    </div>
    <script id="dsq-count-scr" src="//wildskin.disqus.com/count.js" async></script>

</body>
</html>
