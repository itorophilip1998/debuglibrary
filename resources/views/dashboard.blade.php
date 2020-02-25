@extends('layouts.app') @section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center  text">Dashboard <i class="fa fa-dashboard" aria-hidden="true"></i></h2>
            <hr>
            <div class="container-fluid">
                <div class="form p-3 shadow-lg px-0 mastercard ">
                    <div class="content-center m-auto">

<<<<<<< HEAD
                        <div class="userd m-auto p-3">
                            <a href="/uploads/avatars/{{Auth::user()->avatar}}">  <img src="/uploads/avatars/{{Auth::user()->avatar}}"  class="rounded-circle" style="width:220px;height:210px;border:5px solid silver"></a> @if (Auth::user()->id == $profile->id)
                            <a href="/userprofiler"><a title="Upload Camera"  data-toggle="modal" data-target="#camera"><i class="fa fa-camera" aria-hidden="true" ></a></i>
                            @endif
=======
                          <div class="userd m-auto p-3">
                          <a href="/uploads/avatars/{{$friend->avatar}}">  <img src="/uploads/avatars/{{$friend->avatar}}"  class="rounded-circle" style="width:220px;height:210px;border:5px solid silver"></a>
            @if (Auth::user()->id == $profile->id)
     <a href="/userprofiler" ><a title="Upload Camera"  data-toggle="modal" data-target="#camera"><i class="fa fa-camera" aria-hidden="true" ></a></i>
                         @endif
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002
                            <div class="modal fade" id="camera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Profile Picture</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
<<<<<<< HEAD
                                        </div>
                                        <div class="modal-body">
                                            <img src="/uploads/avatars/{{Auth::user()->avatar}}" id="output" style="width:150px; height:150px;  border-radius:50%; margin-right:25px;">
                                            <form action="/profilepicture" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <br>
                                                <div class="row">
                                                    <div class="col-12 m-auto">
                                                        <input accept="image/*" onchange="loadFile(event)" type="file" name="avatar" class="form-control"> <br>
                                                    </div>
                                                    <div class="col-12 m-auto">
                                                        <button type="submit" class="btn btn-sm btn-primary  float-right"><i class="fas fa-upload "></i>Upload</button>
                                                    </div>
=======
                                    </div>
                                    <div class="modal-body">
                                                    <img src="/uploads/avatars/{{Auth::user()->avatar}}" id="output" style="width:150px; height:150px;  border-radius:50%; marging-right:25px;">
                                                    <form action="/profilepicture" enctype="multipart/form-data"  method="post">
                                                        @csrf
                                                        <br>
                                                        <div class="row">
                                                        <div class="col-12 m-auto">
                                                            <input  accept="image/*" onchange="loadFile(event)" type="file" name="avatar" class="form-control"> <br>
                                                      </div>
                                                        <div class="col-12 m-auto">
                                                            <button type="submit" class="btn btn-sm btn-primary  float-right"><i class="fas fa-upload "></i>Upload</button>
                                                        </div>

                                                        </div>
                                                           </div>
                                                </div>
                                            </form>
                                       </div>
                    </div>
                    </div>



                    <h3 class="text-center text-secondary">  {{ $friend->username }} <br>
                        {{ $friend->email}}</h3>
     @if (Auth::user()->id == $profile->id)
     <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit profile <i class="fa fa-pencil" aria-hidden="true"></i></button>
    @endif
    @if (Auth::user()->id != $profile->id)
     <a href="/addfriends/{{$profile->id}}"  class="btn bg-secondary btn-sm color">Add User <i class="fa fa-user-plus" aria-hidden="true"></i></a>

     <a href="/removefriends/{{$profile->id}}"  class="btn bg-secondary  btn-sm color">Remove User <i class="fa fa-trash" aria-hidden="true"></i></a>

     @endif



     <hr>
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
            <form action="/profileupdate" method="Post">
                @csrf
                @method('put')
                <div class="row text">

                    <div class="col-6 ">
                        <div class="form-group ">
                            <label for="firstname" class="labs"><i class="fa fa-user" aria-hidden="true"></i> First name:</label>
                            <input type="text" maxlength="20" value="{{$profile->first_name}}" name="first_name" id="" class="form-control" placeholder="" value="">
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002

                                                </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <h3 class="text-center text-secondary"> {{ Auth::user()->username }} <br> {{ Auth::user()->email}}</h3>
                        @if (Auth::user()->id == $profile->id)
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Edit profile <i class="fa fa-pencil" aria-hidden="true"></i></button> @endif @if (Auth::user()->id != $profile->id)
                        <a href="/addfriends/{{$profile->id}}" class="btn bg-secondary btn-sm color">Add User <i class="fa fa-user-plus" aria-hidden="true"></i></a>

                        <a href="/removefriends/{{$profile->id}}" class="btn bg-secondary  btn-sm color">Remove User <i class="fa fa-trash" aria-hidden="true"></i></a> @endif



                        <hr>
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
                                        <form action="/profileupdate" method="Post">
                                            @csrf @method('put')
                                            <div class="row text">

                                                <div class="col-6 ">
                                                    <div class="form-group ">
                                                        <label for="firstname" class="labs"><i class="fa fa-user" aria-hidden="true"></i> First name:</label>
                                                        <input type="text" maxlength="20" value="{{$profile->first_name}}" name="first_name" id="" class="form-control" placeholder="" value="">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lastname" class="labs"><i class="fas fa-user-tag    "></i> Last name:</label>
                                                        <input type="text" maxlength="20" value="{{$profile->last_name}}" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone no" class="labs"><i class="fa fa-phone" aria-hidden="true"></i> Phone number:</label>
                                                        <input type="text" name="phone_number" maxlength="15" value="{{$profile->phone_numbe}}" id="" class="form-control" placeholder="" aria-describedby="helpId">

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="labs"><i class="fa fa-envelope" aria-hidden="true"></i> Add Another Email</label>
                                                        <input type="text" name="email" id="" maxlength="50" value="{{$profile->email}}" class="form-control" placeholder="" aria-describedby="helpId">

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="gender" class="labs"><i class="fa fa-mars-double" aria-hidden="true"></i> Gender:</label>
                                                        <select class="form-control" value="{{$profile->gender}}" name="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="city" class="labs"><i class="fa fa-map-marker" aria-hidden="true"></i> City:</label>
                                                        <input type="text" name="city" id="" maxlength="20" value="{{$profile->city}}" class="form-control" placeholder="" aria-describedby="helpId">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="marital_status" class="labs"><i class="fas fa-restroom"></i> Marital status:</label>
                                                        <select class="form-control" value="{{$profile->marital_status}}" name="marital_status">
                            <option value="single">single</option>
                            <option value="married">married</option>
                            <option value="divorced">divorced</option>
                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="field_of_expertise" class="labs"><i class="fas fa-tools"></i>  Field of expertise:</label>
                                                        <select class="form-control" value="{{$profile->field_of_expertise}}" name="field_of_expertise">
                            <option value="android">Android</option>
                            <option value="backend">Backend</option>
                            <option value="frontend">Frontend</option>
                            <option value="ui/ux">UI/UX</option>
                            <option value="others">Others</option>
                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row text">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label for="bio" class="labs"><i class="fa fa-address-book" aria-hidden="true"></i> Bio:</label>
                                                        <textarea name="bio" id="" value="{{$profile->bio}}" rows="5" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="text-right">
                                                <button type="submit" class="btn btn-secondary">Update Profile</button>
                                            </div>
                                        </form>


                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="profileinfo pl-5">

                        {{--
                        <div class="row "> --}}
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    First name:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left ">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->first_name ?? "First name" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    Last name:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 lext-left">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->last_name  ?? "Last name" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted  ">
                                    Phone :
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left">
                                    <span class="font-weight-bold text-secondary">{{ $profile->phone_number ?? "Phone number" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    Email:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 lext-left">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->email ?? "Email" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    Gender:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->gender ?? "Gender" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    City:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->city ?? "City " }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    MaritalStatus:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left">
                                    <span class="font-weight-bold text-secondary">  {{ $profile->marital_status ?? "Complecated" }}</span>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
                                    SpecialistOn:
                                </div>
                                <div class="col-7 col-md-8 col-lg-9 text-left">
                                    <span class="font-weight-bold text-secondary"> {{ $profile->field_of_expertise ?? "field_of_expertise " }}</span>
                                </div>
                            </div>
                            <div class="row border rounded-lg border-muted pb-3 m-2">
                                <div class="col-12 ">
                                    Bio
                                </div>
                                <div class="col-12 pr-2">
                                    <span class="font-weight-bold text-secondary">{{ $profile->bio ?? "About ".Auth::user()->username }}</span>
                                </div>
                            </div>


                        </div>

                        <hr>
                        <div>
                            <h4 class="font-weight-bold text">All Post By {{Auth::user()->username}}</h4>
                        </div>
                        <div class="postarea">
                            <div class="card shadow-sm">
                                <div class="card-header">
                                    <a href=""><img src="/uploads/avatars/{{Auth::user()->avatar}}"  class="rounded-circle " style="width:40px;height:38px;border:3px solid silver;"></a> <a class="text-secondary" href="/chat/">friends username</a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Content</p>
                                    <i style="font-size:12px;color:grey;" class="float-right">Posted 20 hours</i>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="" class="btn i text-secondary"><span class="action">Comment</span> <i class="fa fa-commenting text" aria-hidden="true"><sub>20</sub></i></a>
                                    <a href="" class="btn i text-secondary "><span class="action">Like</span> <i class="fa fa-thumbs-up text-primary" aria-hidden="true"><sub>20</sub></i></a>
                                    <a href="" class="btn i text-secondary"><span class="action">Dislike</span> <i class="fa fa-thumbs-down  text-warning" aria-hidden="true"><sub>20</sub></i></a>
                                </div>
                            </div>
                            <br>

<<<<<<< HEAD
=======
                <div class="text-right">
                    <button type="submit" class="btn btn-secondary">Update Profile</button>
                  </div>
                </form>
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002




<<<<<<< HEAD
                        </div>



                    </div>
                    @include('layouts.footer')
                </div>
                @endsection

                <style>
                    .fa-camera {
                        position: absolute;
                        margin-top: 150px !important;
                        margin-left: -30px !important;
                        font-size: 25px !important;
                        cursor: pointer !important;
                        color: indigo;
                        opacity: 80%;
                    }

                    .userd {
                        text-align: center !important;
                        margin-left: -86% !important;
                    }

                    .btn-primary {
                        background-color: indigo !important;
                        opacity: 80% !important;
                        border: none !important;
                    }

                    .label {
                        float: left !important;
                    }

                    .labs {
                        float: left !important;
                    }

                    .rounded-circle {
                        margin: auto;
                    }

                    .profileinfo {
                        font-size: 20px;
                    }
                </style>

                <script>
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        var _href = document.getElementById('href');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        _href.href = URL.createObjectURL(event.target.files[0]);
                    };
                </script>
                </form>
            </div>
=======
        </div>

      </div>
    </div>
  </div>



<div class="profileinfo pl-5">

  {{-- <div class="row ">  --}}
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        First name:
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left ">
        <span class="font-weight-bold text-secondary"> {{ $profile->first_name ?? "First name" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        Last name:
     </div>
    <div class="col-7 col-md-8 col-lg-9 lext-left">
        <span class="font-weight-bold text-secondary"> {{ $profile->last_name  ?? "Last name" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted  ">
        Phone :
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left">
        <span class="font-weight-bold text-secondary">{{ $profile->phone_number ?? "Phone number" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        Email:
     </div>
    <div class="col-7 col-md-8 col-lg-9 lext-left">
        <span class="font-weight-bold text-secondary"> {{ $profile->email ?? "Email" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        Gender:
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left">
        <span class="font-weight-bold text-secondary"> {{ $profile->gender ?? "Gender" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        City:
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left">
        <span class="font-weight-bold text-secondary"> {{ $profile->city ?? "City " }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        MaritalStatus:
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left">
        <span class="font-weight-bold text-secondary">  {{ $profile->marital_status ?? "Complecated" }}</span>
    </div>
   </div>
  <div class="row ">
    <div class="col-5 col-md-4 col-lg-3 border-right border-muted ">
        SpecialistOn:
     </div>
    <div class="col-7 col-md-8 col-lg-9 text-left">
        <span class="font-weight-bold text-secondary"> {{ $profile->field_of_expertise ?? "field_of_expertise " }}</span>
    </div>
   </div>
  <div class="row border rounded-lg border-muted pb-3 m-2">
    <div class="col-12 ">
        Bio
     </div>
    <div class="col-12 pr-2">
    <span class="font-weight-bold text-secondary">{{ $profile->bio ?? "About ".Auth::user()->username }}</span>
    </div>
   </div>


</div>

<hr>
<div><h4 class="font-weight-bold text">All Post By {{Auth::user()->username}}</h4></div>
<div class="postarea">
    <div class="card shadow-sm">
        <div class="card-header">
            <a href=""><img src="/uploads/avatars/{{Auth::user()->avatar}}"  class="rounded-circle " style="width:40px;height:38px;border:3px solid silver;"></a> <a class="text-secondary" href="/chat/">friends username</a>
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Content</p>
            <i style="font-size:12px;color:grey;" class="float-right">Posted 20 hours</i>
        </div>
        <div class="card-footer text-center">
            <a href="" class="btn i text-secondary"><span class="action">Comment</span> <i class="fa fa-commenting text" aria-hidden="true"><sub>20</sub></i></a>
            <a href="" class="btn i text-secondary "><span class="action">Like</span> <i class="fa fa-thumbs-up text-primary" aria-hidden="true"><sub>20</sub></i></a>
            <a href="" class="btn i text-secondary"><span class="action">Dislike</span> <i class="fa fa-thumbs-down  text-warning" aria-hidden="true"><sub>20</sub></i></a>
        </div>
    </div>
    <br>





   </div>



    </div>
</div>
@endsection

<style>

    .fa-camera{
        position: absolute;
        margin-top: 150px !important;
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
    .profileinfo{
        font-size: 20px;
    }

</style>

<script>
    var loadFile = function(event) {
      var output = document.getElementById('output');
      var _href = document.getElementById('href');
      output.src = URL.createObjectURL(event.target.files[0]);
      _href.href = URL.createObjectURL(event.target.files[0]);
    };
  </script>
     </form>
  </div>
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002
