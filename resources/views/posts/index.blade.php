@extends('layouts.app')

@section('content')

<div style="margin-top: 55px;color: black" 
    <div style="margin-top: 55p;text-align:right;"   class="row justify-content-center">
        <div class="col-md-8 col-xs-12">
            <div class="card"  id="wrapper">
                <div style=" border-radius: 40px;text-align:right" class="card-header">اكتب منشور </div>

                <div class="card-body">




                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

                    

                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

   
                              <div class="form-group">
                                    <select class="form-control" name="category_id" id="category">
                                     
                                     @foreach ($categories as $category)
                                     <option value="{{$category->id}}" >{{$category->name}}</option>
                                     @endforeach
                                                                           
                                    </select>
                                  </div>

                            
                               
                               
                            

                                  <div class="form-check">
                                        @foreach ($tags as $tag)
                                        
                                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}"  >
                                        <label class="form-check-label">
                                                {{$tag->tag}}
                                              </label>

                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        @endforeach
                                       
                                        
                                      </div>
<br>


                        <div class="form-group">
                          {{-- <label for="title"> الموقع</label> --}}
                          <input type="text" class="form-control" name="title"  placeholder="رابط الموقع">
                         </div>
                        
                         <div class="form-group">
                            {{-- <label for="content">الوصف</label> --}}
                            <textarea class="form-control" name="content" id="content" rows="1" cols="1"></textarea>
                          </div>

                          <div class="form-group" >
                            {{-- <label for="featured">صورة </label> --}}
                            <input type="file" class="form-control-file" name="featured" >
                          </div>
                       
                         
                        <button style="font-size:16px;padding-right:18px;padding-left:18px" type="submit" class="btn btn-dark">نشر </button>
                      </form>      
                    
                </div>
            </div>
        </div>
    </div>
</div>










    @foreach ($posts as $post)
<div style="background-color:#ffffff;color: black   " id="wrapper">

    <header class="cf" >
    <div class="btn-group arrow" >
   <button class="btn btn-light  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
     @if ( $post->user->id == Auth::user()->id)

     
     
  <div class="dropdown-menu">
   <a style="padding:0px" class="" href="{{  route('post.edit',['id' =>$post->id ])}}">
        تعديل المنشور  
          </a><br>
            <a class=""  href="{{route('post.delete',['id' =>$post->id ])}}" >
            حذف المنشور  
           </a>

  </div>
  @endif
</div>

       




    <img class='profile-pic' src="{{  $post->user->profile->avatar }}">
      <h1 class="name">
                    <a href="#">{{  $post->user->name }}</a>
                </h1>

      <p class="date">{{ $post->created_at}}</p>
    </header>
    <br>
      @foreach ($post->tags as $tag)
      <button style="padding: 3px"  type="button" class="btn btn-white ">{{ $tag->tag }}</button>
      @endforeach
    <br>
      <h5><b>{{$post->category->name}}</b></h5>
    <a  href="{{ $post->title }}">{!! $post->title !!}</a>

<span class="more" > {{  $post->content }}
</span>
    <img style="width: 565px;height: 450px" class="img-content" src="{{ $post->featrued }}" />

 <a class="btn btn-dark"  href="{{route('post',['id' =>$post->id ])}}" >تعليق</a>



</div>



@endforeach

<br>
<br><br>

@endsection
