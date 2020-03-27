<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale-1,user-scalable=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> شبكة العراق السياحية </title>
    @yield('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
   // <link rel="dns-prefetch" href="//fonts.gstatic.com">
    //<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    //<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    //<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link src="{{ asset('css/bootstrap.min.css') }}" defer></link>
    <!-- font -->
    <link src="{{ asset('fonts/fontawesome-webfont.eot') }}" defer></link>
    <link src="{{ asset('fonts/fontawesome-webfont.svg') }}" defer></link>
    <link src="{{ asset('fonts/fontawesome-webfont.ttf') }}" defer></link>
    <link src="{{ asset('fonts/fontawesome-webfont.woff') }}" defer></link>
    <link src="{{ asset('fonts/fontawesome-webfont.woff2') }}" defer></link>
    <link src="{{ asset('fonts/FontAwesome.otf') }}" defer></link>



   
  <style>
      @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v12/XRXV3I6Li01BKofIOOaBXso.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
      }
      /* cyrillic */
      @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v12/XRXV3I6Li01BKofIMeaBXso.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
      }
      /* vietnamese */
      @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v12/XRXV3I6Li01BKofIOuaBXso.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
      }
      /* latin-ext */
      @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v12/XRXV3I6Li01BKofIO-aBXso.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
      }
      /* latin */
      @font-face {
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        src: local('Nunito Regular'), local('Nunito-Regular'), url(https://fonts.gstatic.com/s/nunito/v12/XRXV3I6Li01BKofINeaB.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
      }
  .morecontent span {
      display: none;
  }
  .morelink {
      display: block;
  }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background-color: #e9ebee;
    line-height: 1.34;
    font-family: sans-serif;
  }

  a {
    text-decoration: none;
    color: #385A97;
  }

  header {
    padding: 0;
    position: relative;
  }

 

  #wrapper {
    background-color: #fff;
    width: 600px;
    margin: 10px auto 0;
    border: 1px solid #ffffff ;
    border-top: 0;
    border-radius: 20px;
    padding: 12px;

  }

  .arrow {
    position: absolute;
    width: 18px;
    border: none;
    height: auto;
    right: 25px;
    top:0px;
  }

  .arroww {
    position: absolute;
    width: 12px;
    border: none;
    height: auto;
    right: 25px;
  }

  .profile-pic {
    width: 50px;
    height: 50px;
    float: left;
    margin-right: 20px;
    border-radius: 50px;
  }

  .name,
  .date {
    margin: 0;
  }

  .name {
    color: #385A97;
    font-size: 15px;
    margin-bottom: 5px;
  }

  .date {
    font-size: 12px;
    color: #90949C;
  }

  main {
    font-size: 13px;
  }

 
  .img-content {
    width: 100%;
    margin-bottom: 11px;
    border: 1px solid rgba(0, 0, 0, 0.1);
  }

  .action a {
    color: #7F7F7F;
  }

  .action div {
    display: inline-block;
  }

  .action div p:hover {
    text-decoration: underline;
  }

  .action div:nth-child(n + 2) {
    margin-left: 20px;
  }

  .like img,
  .comment img,
  .share img {
    display: inline-block;
    width: 18px;
    vertical-align: text-bottom;
  }

  .like p {
    color: #1787FA;
  }

  .like p,
  .comment p,
  .share p {
    display: inline-block;
  }

  .share img {
    opacity: .2;
  }

  .cf:before,
  .cf:after {
    content: "";
    /* 1 */
    display: table;
    /* 2 */
  }

  .cf:after {
    clear: both;
  }


 

 * {
  transition: all .3s;
}

pre {
  display: inline;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  margin: 0;
  padding: 0;
}
body.dark {
  background-color: #222;
}
body.teal {
  background: url(https://i.imgur.com/NWzvJmm.png) repeat #fff;
}

a {
  color: #666;
  text-decoration: none;
}
.dark a {
}

.wrapper {
  width: 90vw;
  margin: 0 auto;
  overflow: hidden;
}

.header {
  background-color: #eee;
  padding: 0 2em;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.header h1 {
  color: #666;
}
.dark .header h1 {
  color: #fff;
}
.dark .header {
  background-color: #555;
}
.teal .header {
  opacity: 0;
}
.header .topNav__links {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
.header .topNav__links__link {
  list-style: none;
  margin: 0 1em;
  font-weight: 400;
}
.header .topNav__links__link:hover {
  border-bottom: 1px solid #666;
  border-top: 1px solid #666;
}

.hero {
  position: relative;
}
.hero .overlay {
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 29%, rgba(0, 0, 0, 0.65) 100%);
  position: absolute;
  top: 0;
  left: 0;
}
.hero__image {
  width: 100%;
}
.hero__title {
  position: absolute;
  bottom: 0px;
  width: 80%;
  padding: 0 10%;
  margin: 5% auto;
  text-align: center;
  font-size: 2em;
  font-weight: 300;
  text-shadow: 0 0 20px black;
  color: #fff;
}
@media (min-width: 400px) {
  .hero__title {
    font-size: 3em;
  }
}
@media (min-width: 900px) {
  .hero__title {
    font-size: 5em;
    width: 60%;
    padding: 0 20%;
  }
}
.teal .hero {
  opacity: 0;
}

.switcher {
  display: flex;
  justify-content: space-around;
  align-items: center;
  margin-top: 2em;
  flex-wrap: wrap;
}
.teal .switcher h2 {
  opacity: 0;
}

.content {
  display: flex;
  justify-content: space-between;
  margin: 2em 0;
  padding: 2em 2em;
  flex-wrap: wrap;
  border-bottom: 2px solid #eee;
  border-top: 2px solid #eee;
}
.dark .content {
  border-color: #444;
}
.teal .content {
  opacity: 0;
}
.content h3 {
  margin-top: -5px;
}
.content > * {
  flex: 1 1 40%;
  margin: 0 3em 2em;
}

.floatedImage {
  float: left;
  margin: 0 1.5em 1.5em 0;
}

.button {
  background-color: #4B7094;
  color: white;
  border: 0;
  padding: 1em;
  border-radius: 4px;
  font-weight: 800;
  text-transform: uppercase;
  font-size: 1em;
  height: 3em;
  line-height: 1em;
}
.button:hover {
  cursor: pointer;
  background-color: #333;
}
.button.theme1 {
  background-color: #ddd;
  color: #4B7094;
}
.button.theme1:hover {
  background-color: #eee;
  color: #666;
}
.button.theme3 {
  background-color: transparent;
  border: 1px solid #666;
  color: #000;
}
.theme3:hover {
  background-color: #eee;
  color: #666;
}
.dark .theme3 {
  color: #fff;
}

.bonus .newText {
  height: 2.8em;
  padding: 0 1em;
  font-size: 1em;
  font-weight: 800;
  border-radius: 4px;
  margin: 0 .5em .5em 0;
}

body.custom-background {
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  </style>


</head>
<body style="font-size: 18px; background-color: #c5cae9">


 
     <div style="color: white;font-size: 18px"  class="container-fluid">
 
        <nav style="background-color: #4a148c;font-size: 18px" class="navbar navbar-expand-lg fixed-top navbar-dark  " >
           
                <ul class="navbar-nav mr-auto">

                <a  class="navbar-brand btn btn-outline-info" href="{{route('posts')}}" >شبكة العراق السياحية </a>

                @if (Auth::user())

                @if(Auth::user()->admin)
                        <li class="nav-item dropdown active">
                          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            الاعضاء
                          </a>
                          <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="{{route('users')}}">عرض الاعضاء</a>
                            <a class="dropdown-item" href="{{route('users.create')}}">اضافة اعضاء</a>
                            <a class="dropdown-item" href="{{route('post.created')}}">اضافة منشورات رسمية</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">تعديل</a>
                          </div>
                        </li>
                     

               


                            <li class="nav-item dropdown active">
                              <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                الاعدادات
                              </a>
                          
                              <div style="color: white;font-size: 17px;" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  
                
                                <a class="dropdown-item" href="/dashboard">اظهار</a>
                                 <a class="dropdown-item" href="{{ route('post.soft') }}">المنشورات المحذوفه</a> 
                                
                            
                             </div>
                           </li>
                             
                    
                            <li class="nav-item dropdown active">
                              <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      المحافظات
                              </a>
                              <div   class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="{{route('category.create')}}">اضافة محافطة</a>
                                <a class="dropdown-item" href="{{route('categories')}}">المحافظات</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">تعديل</a>
                              </div>
                            </li>
                            
                  
                            <li class="nav-item dropdown active">
                              <a  class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              الاشارات
                              </a>
                              <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('tag.create')}}">اضافة اشارة</a>
                                <a class="dropdown-item" href="{{route('tags')}}">الاشارات</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">تعديل</a>
                              </div>
                            </li>
                            
                      
                          @endif

          
                <li class="nav-item active">
                      <a class="nav-link " href="/about"> حول </a>
                </li>
                <li class="nav-item active">
                      <a class="nav-link " href="{{route('post.create')}}">انشاء منشور</a>
                </li>
                <li class="nav-item active">
                       <a class="nav-link "   href="{{route('posts')}}"> اخر الاخبار</a>
                </li>
                  
                  @endif
       
          
                        <!-- Authentication Links -->
                        @guest
                        
                            <li  class="nav-item active ">
                                <a  class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                          
                            @if (Route::has('register'))
                               
                                <li class="nav-item active">
                                    <a  class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                             
                          
                            @endif

                        @else

    <li class="nav-item dropdown active ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          الالوان
        </a>
        <div class="dropdown-menu buttonContainer" aria-labelledby="navbarDropdown">
          <button class="   btn btn-light theme1">Light Theme</button>
          <button class="   btn btn-dark theme2">Dark Theme</button>
          <button class="  btn btn-info theme3">InvisiTheme</button>
        </div>
      </li>


                            <li  class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ Auth::user()->name }}
        </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a  class="dropdown-item"  href="{{route('users.profile')}}"  >  الصفحه الشخصيه     </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       تسجيل خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                              </li>
                           
                        @endguest
                   </li>
                 </li>
               </ul>
             </nav>


    @if (Auth::user())



    @endif



        <main   class="py-4">
            @yield('content')
        </main>
 

 

    @yield('scripts')
    


 
    @if (Auth::user())

         <div  style="margin-left: 1700px;margin-right: 10px;margin-top: 70px" class="list-group fixed-top ">
           <a style="font-size: 26px;text-align: center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a;" href="{{ route('page',['id'=>1]) }}" class="list-group-item  list-group-item-dark">بغداد</a>
          <a style="font-size: 26px;text-align: center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a;" href="{{ route('page',['id'=>2]) }}" class="list-group-item  list-group-item-dark">أربيل</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>3]) }}"  class="list-group-item  list-group-item-dark">الأنبار	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>4]) }}" class="list-group-item  list-group-item-dark">بابل	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>5]) }}" class="list-group-item  list-group-item-dark">البصرة	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>6]) }}" class="list-group-item  list-group-item-dark">	دهوك</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>7]) }}" class="list-group-item  list-group-item-dark">القادسية	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>8]) }}" class="list-group-item  list-group-item-dark">	ديالى</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>9]) }}" class="list-group-item  list-group-item-dark">ذي قار</a>
          {{--  </div>  --}}

          {{--  <div style="margin-right: 1700px;margin-top:70px;margin-left: 10px" class="list-group fixed-top ">  --}}
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>10]) }}" class="list-group-item  list-group-item-dark">السليمانية</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>11]) }}" class="list-group-item  list-group-item-dark">	صلاح الدين</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>12]) }}" class="list-group-item  list-group-item-dark">كركوك	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>13]) }}" class="list-group-item  list-group-item-dark"> كربلاء</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px; font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>14]) }}" class="list-group-item  list-group-item-dark">المثنى	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px; font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>15]) }}" class="list-group-item  list-group-item-dark">ميسان	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px; font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>16]) }}" class="list-group-item  list-group-item-dark">النجف	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px;font-family: Arial, Helvetica, sans-serif;color:white;background-color:#49599a" href="{{ route('page',['id'=>17]) }}" class="list-group-item  list-group-item-light">نينوى	</a>
          <a style="font-size: 26px;text-align:center;padding-top: 2px;padding-bottom: 4px; font-family: Arial, Helvetica, sans-serif ;color:white;background-color:#49599a" href="{{ route('page',['id'=>18]) }}" class="list-group-item  list-group-item-dark">واسط	</a>
         
        </div>
    
      @endif



<footer>

      <div class="card text-dark bg-light" style="max-wiht:50rem">
        <div class="card-header"  style="text-align:center" > 
       <marquee>  &copy;Copyright 2018.All rights reserved. ali alzobaidi </marquee>
        </div>
      </div>
      
    </footer>    



  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">

///////////////
var body = document.querySelector("body"), // Creates a variable called body, so we can reference it more easily below.
  goLight = function() { // Creates a function called goLight that adds the 'dark' class to the body
    body.className = "";
  },
  goDark = function() { // Creates a function called goDark that removes the 'dark' class from the body
    body.className = "";
    body.classList.add("dark");
  },
  goTeal = function() {
      body.className = "";
      body.classList.add("teal");
    }

document.querySelector(".theme1").addEventListener("click", goLight, false); // Tells the first button to run the goLight function when clicked

document.querySelector(".theme2").addEventListener("click", goDark, false); // Tells the second button to run the goDark function when clicked

document.querySelector(".theme3").addEventListener("click", goTeal, false);

// Now let's do the bonus round!
var switchee = document.querySelector(".bonus__header"),
  switchButton = document.querySelector(".submit"),
  switcher = document.querySelector(".newText"),
  replaceText = function() {
    var switcherText = document.querySelector(".newText").value;
    switchee.innerHTML = switcherText;
  };

switchButton.addEventListener("click", replaceText, false); // Switch the text on click of the button

var switchImmediately = function() {
  switcher.addEventListener("keyup", replaceText, false); // Switch text every time you type a key in the input
};

switchImmediately(); // Invoke the function









/////////////////

$(document).ready(function() {
  // Configure/customize these variables.
  var showChar = 100;  // How many characters are shown by default
  var ellipsestext = "...";
  var moretext = "Show more >";
  var lesstext = "Show less";
  

  $('.more').each(function() {
      var content = $(this).html();

      if(content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
      }

  });

  $(".morelink").click(function(){
      if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
      } else {
          $(this).addClass("less");
          $(this).html(lesstext);
      }
      $(this).parent().prev().toggle();
      $(this).prev().toggle();
      return false;
  });
});
</script>

</div>

</body>
</html>
