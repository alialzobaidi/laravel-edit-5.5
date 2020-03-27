
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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

   


</head>
<body>



  <div class="card text-white bg-dark mb-3" style="font-size: 26px;text-align: center">
    <div class="card-header">حييت سفحك عن بعد فحييني يا دجلة الخير&nbsp... &nbsp &nbsp &nbsp  يا ام البساتين</div>
    
  </div>


  <div class="card text-center bg-info mb-3 ">
    <div  class="card-header bg-info mb-3 ">
      <h1 style="padding-bottom: 0px;"> العراق   </h1>
    </div>
    <div class="card-body bg-info mb-3 ">
      <h1 class="card-title "> {{ $category->name }} </h1>
      <h5 style="text-align: center;font-size: 26px" class="card-title ">{{ $category->content }}</h5>
      <a href="/home" class="btn btn-primary">Back </a>
    </div>
    <div class="card-footer text-muted alert-primary">
            نتمنى لك قراءه ممتعه 
    </div>
  </div>

  
  

  <div class="container">
      <div class="row"> 
      @foreach ($posts as $post)
      
      <div class="col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
                <img  src="{{ $post->featrued }}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
            
                  <h5 class="card-title">   <a style="margin: 0px" class="status" href="{{ $post->title }}">{!! $post->title !!}</a>
                  </h5>
                    <p class="card-text"> {{$post->category->name}}</p>
                    @foreach ($post->tags as $tag)
                    <p>{{ $tag->tag }}</p>
                    @endforeach
                    <p class="card-text"> {{  $post->content }}</p>
                    <p class="card-text">  <p class="date">{{ $post->created_at}}</p></p>

              </div>
            </div>
          </div>
        </div>
     </div>
    
    @endforeach
  </div>
  </div>



  


</body>
</html>



                     
