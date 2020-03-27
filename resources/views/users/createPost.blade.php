@extends('layouts.app')

@section('content')





<div style="margin-top: 55px;;color: black"
class="container">
    <div style="margin-top: 55px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

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

                    

                    <form action="{{route('post.stored')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field()}}

   
                               <div class="form-group">
                                    <label for="exampleFormControlSelect1">المحافظات</label>
                                    <select class="form-control" name="category_id" id="category">
                                     
                                     @foreach ($categories as $category)
                                     <option value="{{$category->id}}" >{{$category->name}}</option>
                                     @endforeach
                                                                           
                                    </select>
                                  </div>



                                  <div class="form-check">
                                        @foreach ($tags as $tag)
                                        
                                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}"  >
                                        <label class="form-check-label"  >
                                                {{$tag->tag}}
                                              </label><br>
                                        @endforeach
                                       
                                        
                                      </div>



                        <div class="form-group">
                          <label for="title"> الموقع</label>
                          <input type="text" class="form-control" name="title"  placeholder="رابط الموقع">
                         </div>
                        
                         <div class="form-group">
                            <label for="content">الوصف</label>
                            <textarea class="form-control" name="content" id="content" rows="8" cols="8"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="featured">صورة </label>
                            <input type="file" class="form-control-file" name="featured">
                          </div>
                       
                         
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>      
                    







                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
@endsection

{{-- 
@section('styles')

@endsection --}}

