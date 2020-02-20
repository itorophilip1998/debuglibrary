@extends('layouts.app') 
@section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center  text">Chat <i class="fa fa-comments" aria-hidden="true"></i></h2>
            <hr>
            <div class="">
                <div class="form p-2 py-4 shadow-lg px-0 mastercard ">
                    <br>
                    <ul class="list-group">
                              <div class=" w-100 p-2 m-auto text-info rounded-lg">
                                  {{-- list of all added friends --}}
                             <li class="list-group-item w-100"><a href="" class="allbtn rounded-pill p-2"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a> <span class="float-right text-dark">Active Friends</span></li>
                             @if(count($friends)>0)
                             @foreach($friends->all() as $friends)
                             <li class="list-group-item w-100"><a href="/dashboard/{{$friends->username}}"><img src="/images/logo2.jpg"  class="rounded-circle" style="width:40px;height:38px"></a> <a class="text" href="/chat/{{$friends->username}}">{{$friends->username}}</a> <span style="width:10px;height:10px" class="rounded-circle float-right bg-success"></span></li> 
                     
                  
                            @endforeach
                             @else
                              <li class="list-group-item w-100"><a class="text" href="/dashboard">No Friends Found</a> <span style="width:10px;height:10px" class="rounded-circle float-right bg-success"></span></li> 
                                 
                             @endif
                            </div>
                          </ul>
{{--                      
                    <div class="w-75 m-auto mt-5">
                        @if(session()->has('success'))
                        <div class="alert alert-info" role="alert">
                            {{session()->get('success')}}
                        </div>
                        @endif
                    </div> --}}
                </div>
                    {{-- Include footer here...... --}}
@include('layouts.footer')
            </div>
        </div>
    </div>
</div>
@endsection
