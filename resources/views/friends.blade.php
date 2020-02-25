@extends('layouts.app') @section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center  text">Friends <i class="fa fa-users" aria-hidden="true"></i></h2>
            <hr>
            <div class="container-fliud">
                <div class="form p-5 shadow-lg px-0 mastercard ">
                    Friends Content here. ........


                    <ul class="list-group">
                        <div class=" w-100 p-2 m-auto text-info rounded-lg">
                            {{-- list of all added friends --}}
                       <li class="list-group-item w-100"><a href="" class="allbtn rounded-pill p-2"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh</a> <span class="float-right text-dark">Active Friends</span></li>
                       @if(count($chats)>0)
                       @foreach($chats->all() as $chat)
                       <li class="list-group-item w-100"> {{$chat->id}}<img src=""  class="rounded-circle" style="width:40px;height:38px"></a> {{$chat->username}}</a> <span style="width:10px;height:10px" class="rounded-circle float-right bg-success"></span></li>


                      @endforeach
                       @else
                        <li class="list-group-item w-100"><a class="text" href="/dashboard">No Friends Found</a> <span style="width:10px;height:10px" class="rounded-circle float-right bg-success"></span></li>

                       @endif
                      </div>
                    </ul>




                    {{-- <div class="w-75 m-auto mt-5">
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
