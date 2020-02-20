@extends('layouts.app')
@section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center text-info text-secondary">Dashboard <i class="fa fa-dashboard" aria-hidden="true"></i></h2>
            <hr>
            <div class="container">
                <div class="form p-5 shadow-lg px-0 mastercard ">
                    <div class="content-center m-auto">

                    <div class="row">

                    <div class="col offset-5">
                          <div class="userd">
                            <img src="/uploads/avatars/{{Auth::user()->avatar}}"  class="rounded-circle" style="width:100px;height:100px"><a href="/userprofiler"><i class="fa fa-camera" aria-hidden="true" cursor="pointer" data-toggle="modal" data-target="#exampleModalnew"></i></a>
                        {{-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> --}}
                        <br>
                        <br>
                        User Info:
                        <br>

                    Username: {{ Auth::user()->username }}
                    <br>
                    Email: {{ Auth::user()->email}}
                    <br>

                    <br>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit profile</button>

                    <!-- Button trigger modal -->


  <!-- Modal -->





  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="GET">
                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="firstname" class="labs"><i class="fa fa-user" aria-hidden="true"></i> First name:</label>
                            <input type="text" name="first_name" id="" class="form-control" placeholder="" value="">

                        </div>
                        <div class="form-group">
                            <label for="lastname" class="labs"><i class="fas fa-user-tag    "></i> Last name:</label>
                            <input type="text" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="form-group">
                            <label for="phone no" class="labs"><i class="fa fa-phone" aria-hidden="true"></i> Phone number:</label>
                            <input type="text" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                        <div class="form-group" >
                            <label for="email" class="labs"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                        <label for="gender" class="labs"><i class="fa fa-mars-double" aria-hidden="true"></i> Gender:</label>
                        <select class="form-control" name="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>

                        <div class="form-group">
                            <label for="city" class="labs"><i class="fa fa-map-marker" aria-hidden="true"></i> City:</label>
                            <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId">

                        </div>

                        <div class="form-group">
                            <label for="marital_status" class="labs"><i class="fas fa-restroom"></i> Marital status:</label>
                            <select class="form-control" name="marital_status">
                            <option value="single">single</option>
                            <option value="married">married</option>
                            <option value="divorced">divorced</option>
                        </select>
                        </div>

                        <div class="form-group">
                             <label for="field_of_expertise" class="labs"><i class="fas fa-tools"></i>  Field of expertise:</label>
                            <select class="form-control" name="field_of_expertise">
                            <option value="android">Android</option>
                            <option value="backend">Backend</option>
                            <option value="frontend">Frontend</option>
                            <option value="ui/ux">UI/UX</option>
                            <option value="others">Others</option>
                        </select>
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-xl-12">
                        <div class="form-group">
                            <label for="bio" class="labs"><i class="fa fa-address-book" aria-hidden="true"></i> Bio:</label>
                            <textarea name="bio" id="" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                        </div>
                    </div>
                </div>






                </div>
            </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6">
    First name: {{ $profile->first_name ??" " }}
    <br>
    Last name: {{ $profile->last_name ??" " }}
    <br>
    Phone number: {{ $profile->phone_number ??" " }}
    <br>
    Email: {{ $profile->email ??" " }}
    </div>
    <div class="col-6">
    Gender: {{ $profile->gender ??" " }}
    <br>
    City: {{ $profile->city ??" " }}
    <br>
    Marital Status: {{ $profile->marital_status ??" " }}
    <br>
    Field of expertise: {{ $profile->field_of_expertise ??" " }}
    <br>
    </div>
    </div>
    <div class="row">
    <div class="col-xl-12">
    Bio: {{ $profile->bio ??" " }}
    </div>
    </div>
                </div>
                    </div>
                    </div>


                    </div>


        </div>
        <div class="modal fade" id="exampleModalnew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%; marging-right:25px;">
                                <h2>{{ Auth::user()->username }}'s profile</h2>
                                <form action="/profilepicture" enctype="multipart/form-data"  method="post">
                                    @csrf
                                    <label for="">Update Profile Image</label>

                                    <input type="file" name="avatar" id="">

                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-upload    "></i></button>

                            </div>
                        </form>

                          </div>
                        </div>
                      </div>


                    <div class="w-75 m-auto mt-5">
                        @if(session()->has('success'))
                        <div class="alert alert-info" role="alert">
                            {{session()->get('success')}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    /* .fa-user-circle-o{
        color: indigo !important;
        opacity: 80% !important;
        font-size: 80px !important;

    } */

    .fa-camera{
        position: absolute;
        margin-top: 70px !important;
        margin-left: -30px !important;
        font-size: 25px !important;
        cursor: pointer !important;
        color: indigo;
        opacity: 80%;


    }

    .userd{
        text-align: center !important;
        margin-left: -86% !important;
    }

    .btn-primary{
        background-color:indigo !important;
        opacity: 80% !important;
        border: none !important;
    }

    .label{
        float: left !important;
    }

    .labs{
        float: left !important;
    }

    .rounded-circle{
        margin: auto;
    }
</style>
