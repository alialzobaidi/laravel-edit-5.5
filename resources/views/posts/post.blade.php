@extends('layouts.app')

@section('content')


 @if ($post->count()>0)
<div style="margin-top: 55px;"
class="container">
<div style="background-color:#FAFAFA;;color: black" id="wrapper">

    <header class="cf" >
    <div class="btn-group arrow" >
   <button class="btn btn-light  dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu">
   <a style="padding:0px" class="" href="{{ route('post.edit',['id'=>$post->id]) }}">
        تعديل المنشور    {{--  <i  class="far fa-trash-alt arrow"></i>  --}}
          </a><br>
            <a class=""  href="{{route('post.delete',['id' =>$post->id ])}}" >
            حذف المنشور    {{--  <i class="fas fa-edit arroww"></i>  --}}
           </a>
   
  </div>
</div>

       
      <img class='profile-pic' src="../{{  $post->user->profile->avatar }}">
      <h1 class="name">
                    <a href="#">{{  $post->user->name }}</a>
                </h1>

      <p class="date">{{ $post->created_at}}</p>
    </header>
    <br>
      @foreach ($post->tags as $tag)
      <button style="padding: 3px"  type="button" class="btn btn-dark ">{{ $tag->tag }}</button>
      @endforeach
    <br>
      <h5><b>{{$post->category->name}}</b></h5>
    <a style="margin: 0px" class="status" href="{{ $post->title }}">{!! $post->title !!}</a>
     <p class="more" style="margin: 0px"> {{  $post->content }} </p>
    <img style="width: 565px;height: 450px" class="img-content" src="{{ $post->featrued }}" />



  <form action="{{ route('comment.store',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
   {{ csrf_field() }}

            <div class="form-group">
            <textarea class="form-control" row="1" name="body" id="body" Placeholder="اكتب شيء . . ."></textarea>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">اضف تعليق</button>
            </div>

  </form>      
                    


<div class="comment">
    @foreach ($post->comment as $comment)
        <div class="alert alert-dark more" role="alert">
           {{-- <img class='profile-pic' src="../{{  $user->profile->avatar }}"> --}}
          <p style="color:green;font-size:14px">  {{ $comment->user->name }}  </p>
           {{ $comment->body }}
         </div>
        
    @endforeach
    
</div>

</div>
</div>


 @endif

@endsection
