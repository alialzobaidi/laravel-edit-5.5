@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-top: 55px;;color: black" class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">عدد المنشورات</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$post_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                              <div class="col-sm">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">عدد الاعضاء</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$users_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                              <div class="col-sm">
                                    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                            <div class="card-header">عدد المحافظات الموجوده</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$categories_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                            </div>
                          </div>
                   
                    





                          <div class="container">
                                <div class="row">
                                  <div class="col-sm">
                                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                                <div class="card-header">عدد الاشارات </div>
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$tags_count}}</h5>
                                                 </div>
                                              </div>
                    
                                  </div>
                                  <div class="col-sm">
                                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">عدد المنشورات المحذوفه</div>
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$trashed_count}}</h5>
                                                 </div>
                                              </div>
                                  </div>
                                  <div class="col-sm">
                                        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                                <div class="card-header">قريبا </div>
                                                <div class="card-body">
                                                  <h5 class="card-title">Info card title</h5>
                                                 </div>
                                              </div>
                                  </div>
                                </div>
                              </div>



                   
                        
                       
                         
                         
                        
                         
                         












                </div>
            </div>
        </div>
    </div>
</div>
@endsection
