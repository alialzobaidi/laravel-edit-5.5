@extends('layouts.app')

@section('content')


    <style type="text/css">  
:root {
  --clr1: #ddd;
  --clr2: #efefef;
  --clr3: #333;
  --clr4: tomato;
  --border-radius: 7px;
  --text-radius: 50em;
}

body {
  background: var(--clr1);
  padding: 50px 0 0 0;
  margin: 0 10px;
}
body *, body :after, body :before {
  box-sizing: border-box;
}

.transparent {
  background: transparent !important;
}

.wrap {
  max-width: 960px;
  min-width: 360px;
  margin: 0 auto;
  position: relative;
}
.wrap.sticky {
  margin-top: 150px;
  /* set height from header */
}

.fluid .wrap {
  max-width: 100% !important;
}

header {
  background: var(--clr2);
  padding: 50px;
  width: 100%;
  border-radius: var(--border-radius);
  position: relative;
  z-index: 99;
}

.wrap.sticky header {
  background: var(--clr2);
  padding: 50px;
  position: fixed;
  top: 0px;
  max-width: 960px;
  width: calc(100% - 20px);
  min-width: 360px;
  border-radius: 0px 0px var(--border-radius) var(--border-radius);
}

.fluid .wrap.sticky header {
  max-width: 100% !important;
}

header .logo {
  background: var(--clr1);
  width: 50px;
  height: 50px;
  border-radius: var(--text-radius);
}
header nav {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translate(-50px, -50%);
}
header nav ul li {
  display: inline-block;
  list-style: none;
  width: 60px;
  height: 10px;
  background: var(--clr1);
  border-radius: var(--text-radius);
}

section {
  background: var(--clr2);
  padding: 100px 50px;
  width: 100%;
  border-radius: var(--border-radius);
  position: relative;
  margin: 10px 0 0 0;
}
section .headline {
  display: block;
  margin: 0 auto;
  list-style: none;
  max-width: 260px;
  height: 30px;
  background: var(--clr1);
  border-radius: var(--text-radius);
}
section .text {
  display: block;
  margin: 10px auto;
  max-width: 500px;
  height: 14px;
  background: var(--clr1);
  border-radius: var(--text-radius);
}
section .button {
  display: block;
  margin: 20px auto 0 auto;
  max-width: 120px;
  height: 35px;
  background: var(--clr1);
  border-radius: var(--text-radius);
}
section.contentbox .headline {
  margin: 10px 0 !important;
  max-width: 65%;
}
section.contentbox .text {
  margin: 10px 0 !important;
  max-width: 100%;
}
section.contentbox .button {
  margin: 10px 0 !important;
}
section.cards {
  padding: 0px;
  background: transparent;
  display: table;
}
section.cards .card {
  background: var(--clr2);
  width: calc(33.6% - 10px);
  margin: 0 5px;
  border-radius: var(--border-radius);
  display: inline-block;
}
section.cards .card:first-child {
  margin: 0 5px 0 0;
}
section.cards .card:last-child {
  margin: 0 0 0 5px;
}
section.cards .card .content {
  padding: 40px;
}
section.cards .card img {
  width: 100%;
  height: auto;
  border-radius: var(--border-radius) var(--border-radius) 0px 0px;
}

footer {
  padding: 50px;
  width: 100%;
  border-radius: var(--border-radius) var(--border-radius) 0px 0px;
  position: relative;
  margin: 10px 0 0 0;
}
footer .logo {
  background: var(--clr2);
  width: 50px;
  height: 50px;
  border-radius: var(--text-radius);
}
footer nav {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translate(-50px, -50%);
}
footer nav ul li {
  display: inline-block;
  list-style: none;
  width: 60px;
  height: 10px;
  background: var(--clr2);
  border-radius: var(--text-radius);
}

@media (max-width: 728px) {
  section.cards .card {
    width: 100%;
    display: block;
    margin: 10px 0 0 0 !important;
    padding: 0;
  }

  .wrapper {
    padding: 50px 10px 100px 10px !important;
  }
}
body, html {
  max-width: 100%;
  overflow-x: hidden;
}

body {
  text-rendering: optimizelegibility;
  margin: 0px;
  padding: 0px;
  height: 100%;
}

.wrapper {
  transform-origin: center bottom 0px;
  transition: all 0.5s ease 0s;
  box-shadow: 0px 22px 54px rgba(0, 0, 0, 0.5);
  background: var(--clr3);
  padding: 50px 50px 100px 50px;
}

body.tight .wrapper {
  transform: translateY(-60px) scale(0.9);
  cursor: pointer;
}

.footer {
  width: 90%;
  max-width: 1440px;
  margin: 0px auto;
  text-align: center;
  margin-bottom: 50px;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
.arrow {
  position: fixed;
  bottom: 50px;
  left: 50%;
  cursor: pointer;
  margin-left: -20px;
  width: 20px;
  height: 20px;
  padding: 20px;
  z-index: 99;
  background-color: var(--clr4);
  border-radius: 50em;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyICBsMTg5Ljk5OS0xOTBjMjAuMTc4LTIwLjE3OCw1My4xNjQtMTkuOTEzLDczLjY3MiwwLjU5NWwwLDBjMjAuNTA4LDIwLjUwOSwyMC43NzIsNTMuNDkyLDAuNTk1LDczLjY3MUwyOTMuNzUxLDQ1NS44Njh6Ii8+DQo8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjIwLjI0OSw0NTUuODY4YzIwLjE4LDIwLjE3OSw1My4xNjQsMTkuOTEzLDczLjY3Mi0wLjU5NWwwLDBjMjAuNTA5LTIwLjUwOCwyMC43NzQtNTMuNDkzLDAuNTk2LTczLjY3MiAgbC0xOTAtMTkwYy0yMC4xNzgtMjAuMTc4LTUzLjE2NC0xOS45MTMtNzMuNjcxLDAuNTk1bDAsMGMtMjAuNTA4LDIwLjUwOS0yMC43NzIsNTMuNDkyLTAuNTk1LDczLjY3MUwyMjAuMjQ5LDQ1NS44Njh6Ii8+DQo8L3N2Zz4=);
  background-size: 20px 15px;
  background-repeat: no-repeat;
  background-position: center;
}

.bounce {
  -moz-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}
    </style>


        <div class="wrapper">
                <div  class="wrap">
                  
                  <div class="arrow animated bounce"></div>
                  
                  <header>   
                    <div class="logo">

                        <img src="img/logo.png" alt="Smiley face" height="53" width="53">

                    </div>
                    <nav>
                      {{-- <ul style="font-size: 24px">
                         <li>السياحية</li>
                        <li>العراق</li>
                        <li>شبكة</li> --}}
                     <h1>  Welcome to your site </h1>
                      </ul>
                    </nav>
                  </header>

                  
                  <section class="transparent">
                    <div class="headline" style="font-size: 24px;text-align: center;"> شبكة العراق السياحية </div>
                    {{-- <div class="text"></div>
                    <div class="text"></div> --}}
                     </section> 
                  <section class="cards">
                    <div class="card">
                      <img src="img/1.jpg" alt="Smiley"  height="100" width="60">
                      <div class="content">
                        <div class="headline" style="font-size: 24px;text-align: center;">حضارة بلاد الرافدين</div>
                        {{-- <div class="text"></div>
                        <div class="text"></div>
                        <div class="button"></div> --}}
                      </div>
                    </div>
                    <div class="card">
                      <img src="img/3.jpg" alt="Smiley"  height="100" width="60">
                      <div class="content">
                        <div class="headline" style="font-size: 24px;text-align: center;">حضارة بلاد الرافدين</div>
                        {{-- <div class="text"></div>
                        <div class="text"></div>
                        <div class="button"></div> --}}
                      </div>
                    </div>
                    <div class="card">
                      <img src="img/2.jpg" alt="Smiley"  height="100" width="60">
                      <div class="content">
                        <div class="headline" style="font-size: 24px;text-align: center;">حضارة بلاد الرافدين</div>
                        {{-- <div class="text"></div>
                        <div class="text"></div>
                        <div class="button"></div> --}}
                      </div>
                    </div>
                  </section>
                  
                  <section class="contentbox">
    <h1 style="text-align: center;color: tomato">
                    اهلا وسهلا بكم في الموقع الاول عراقيا لسياحة والسفر داخل العراق يمكن ان تستخدم الموقع بدون قيود او شروط 
                    يمكنك البحث عن المناطق الدينية والسياحية والاثرية داخل العراق ومعرفة الحضارات الموجوده داخل هذا البلد العظيم 
                    يمكنك الموقع من تطوير ذاتك ثقافيا او الاستفسار عن مكان تود الذهاب اليه يوفر لك الموقع امكانية التسجيل فيه 
                    ونشر المواقع التي قمت بزيارتها 
    </h1>
                    {{-- <div class="headline"></div>
                    <div class="text"></div>
                    <div class="text"></div>
                    <div class="text"></div>
                    <div class="button"></div> --}}

                  </section>
                  
                </div>
                </div>
                  
                 <footer class="">
                    <div>  <img src="img/logo.png" alt="Smiley face" height="60" style="margin-bottom:10px;margin-left: 0px" width="60"> </div>
                    
                      <ul style="font-size: 24px;margin-right: 15px">
                       <li>email: alklobmmalk11@gmail.com</li><hr>
                        <li>address:iraq_babylon</li><hr>
                        <li>phoneNumber:+9647823658062</li>
                      </ul>
                    
                  </footer>
                  








                  <script type="text/javascript">
                    
                  $(document).ready(function($) {

                    $(window).on('scroll', function() {
                  
                      //ADD .TIGHT
                      if ($(window).scrollTop() + $(window).height() > $('.wrapper').outerHeight()) {
                        $('body').addClass('tight');
                        $('.arrow').hide();
                      } else {
                        $('body').removeClass('tight');
                        $('.arrow').show();
                      }
                    });
                  
                    //BACK TO PRESENTATION MODE
                    $("html").on("click", "body.tight .wrapper", function() {
                      $('html, body').animate({
                        scrollTop: $('.wrapper').outerHeight() - $(window).height()
                      }, 500);
                    });
                  
                  });
                  
                  $('.arrow').click(function(){
                     $("html").animate({ scrollTop: $('html').prop("scrollHeight")}, 1200);
                  });

                </script>
@endsection
