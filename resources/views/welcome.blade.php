
<html>
<head>
      <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title> welcome </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   



    <style type="text/css">  

        @import url(https://fonts.googleapis.com/css?family=Khula:700);
        @import url('https://fonts.googleapis.com/css?family=Amiri|Aref+Ruqaa|Indie+Flower');
        body {
          background: #;
        }
        .hidden {
          opacity:0;
        }
        .console-container {
         
          font-family:Khula;
          font-size:4em;
          text-align:center;
          height:200px;
          width:600px;
          display:block;
          position:absolute;
          color:black;
          top:0;
          bottom:0;
          left:0;
          right:0;
          margin:auto;
        }
        .console-underscore {
           display:inline-block;
          position:relative;
          top:-0.14em;
          left:10px;
        }
        
        /* Contact  */
         {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
        }
        
        body {
          font-family: "PT Sans";
          background-color: #ddd;
          color: #b71c1c;
        }
        
        .section {
          position: relative;
          width: 900px;
          max-width: 80%;
          border: 2px solid #b71c1c;
          border-top: none;
          text-align: center;
          margin: 60px auto;
        }
        
        .section h1 {
          position: relative;
          margin-top: -14px;
          display: inline-block;
          letter-spacing: 4px;
        }
        
        .top-border{
          position: absolute;
          height: 2px;
          width: 24%;
          background-color: #92DCE5;
        }
        
        .right {
          right: 0;
        }
        
        .left {
          left: 0;
        }
        
        @media (max-width: 685px) {
        .top-border {	
          width: 18%;
            }
        }
        
        .section p {
          width: 61%;
          margin: 20px auto 40px auto;
          line-height: 30px;
        }
        
        .section a {
          outline: 0;
          display: inline-block;
          padding: 20px;
          margin-bottom: 40px;
          width: 440px;
          max-width: 80%;
          background-color: #92DCE5;
          color: #92DCE5;
          font-size: 22px;
          letter-spacing: 3px;
          transition: all 0.3s ease 0s;
          -moz-transition: all 0.3s ease 0s;
          -webkit-transition: all 0.3s ease 0s;
        }
        
        .section a:hover {
          background-color: #1D222D;
        }
        
        .section a:link, .section a:visited, .section a:link:hover, .section a:visited:hover {
          text-decoration: none;
          color: #2B303A;
          
        }
        
        @media (max-width: 500px) {
          .top-border {	
            display: none;
          }
          .section {
          border-top: 2px solid #333;
          }
          .section h1 {
            margin: 20px 6px;
          }
        }
        div.background {
          background:url('img/asa.jpg') repeat;
          border: 2px solid black; 
        }
        
        div.transbox {
          margin-top: 10px;
          margin-bottom: 306px;
          background-color: #ffffff;
          border: 1px solid black;
          opacity: 0.9;
          filter: alpha(opacity=30);
          margin-left: 500px;
          margin-right: 500px;
        }
   
    </style>

</head> 

<body >

 
<div class="background">
  <div class="transbox">
        <div style="color: #92DCE5" class='console-container '>
            
            <span id='text'></span>
            
            <div class='console-underscore' id='console'> 
                    Iraq Tourism Network
            </div>
        
        </div>

        <div class="section">
          <div class="top-border left"></div>
          <div class="top-border right"></div>
          <h1 style="font-family: 'Indie Flower', cursive;">Iraq Tourism Network</h1>
          <p style="font-size: 26px; color: #0091ea ; font-family:serif" >
           
            موقعنا يخص المواقع السياحية داخل العراق ومو بس هيج تكدر تعرف المناطق الاثرية والدينية ايضا ومعرفة الشركات اللي ممكن توصلك الكل مكان سجل ويانه وماراح تخسر شي 
        
            </p>

            <a href="{{ url('/home') }}" style="text-decoration: none;text-decoration-line:none;margin-bottom: 200px;padding: 20px 70px 20px 70px;"  class="btn btn-danger btn-lg active " role="button" aria-pressed="true">
                سجل الدخول وسافر ويانه الكل مكان
            </a>


        </div>

      </div>
    </div>
    

    <body>

</html>






<script type="text/javascript">
    consoleText(['شبكة العراق السياحية'], 'text',['#b71c1c']);

    function consoleText(words, id, colors) {
      if (colors === undefined) colors = ['#b71c1c'];
      var visible = true;
      var con = document.getElementById('console');
      var letterCount = 1;
      var x = 1;
      var waiting = false;
      var target = document.getElementById(id);
      target.setAttribute('style', 'color:' + colors[0])
      window.setInterval(function() {
    
        if (letterCount === 0 && waiting === false) {
          waiting = true;
          target.innerHTML = words[0].substring(0, letterCount)
          window.setTimeout(function() {
            var usedColor = colors.shift();
            colors.push(usedColor);
            var usedWord = words.shift();
            words.push(usedWord);
            x = 1;
            target.setAttribute('style', 'color:' + colors[0])
            letterCount += x;
            waiting = false;
          }, 1000)
        } else if (letterCount === words[0].length + 1 && waiting === false) {
          waiting = true;
          window.setTimeout(function() {
            x = -1;
            letterCount += x;
            waiting = false;
          }, 1000)
        } else if (waiting === false) {
          target.innerHTML = words[0].substring(0, letterCount)
          letterCount += x;
        }
      }, 120)
      window.setInterval(function() {
        if (visible === true) {
          con.className = 'console-underscore hidden'
          visible = false;
    
        } else {
          con.className = 'console-underscore'
    
          visible = true;
        }
      }, 400)
    }

</script>