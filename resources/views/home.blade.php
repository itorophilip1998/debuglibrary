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
                    <i class="fa fa-user-circle-o 3x" aria-hidden="true"></i>
                    User Profile:
                    <div class="row">
                    <div class="col">


                    E-Mail Address: {{ Auth::user()->email}}
                    Username: {{ Auth::user()->username }}

                    </div>
                    </div>
                    {{-- Gender: {{ Auth::user()->gender}} --}}


                    {{-- First name: {{ $profile->first_name }}
                    Last name: {{ $profile->first_name }}
                    Phone number: {{ $profile->first_name }}
                    Email: {{ $profile->first_name }}
                    </div>
                    <div class="col">
                    Gender: {{ $profile->first_name }}
                    City: {{ $profile->first_name }}
                    Marital Status: {{ $profile->first_name }}
                    Field of expertise: {{ $profile->first_name }}
                    </div>
                    Bio: {{ $profile->first_name }}
                    </div> --}}

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

<form action="" method="GET">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" name="first_name" id="" class="form-control" placeholder="" value="">

            </div>
            <div class="form-group">
                <label for="lastname">Last name:</label>
                <input type="text" name="last_name" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="phone no">Phone number:</label>
                <input type="text" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
        </div>
        <div class="col">

            <label for="gender">Gender:</label>
            <select class="form-control" name="gender">
            <option value="">male</option>
            <option value="">female</option>
        </select>
            <br>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" name="city" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="status">Marital status:</label>
                <input type="text" name="marital_status" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="status">Field of expertise:</label>
                <input type="text" name="field_of_expertise" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="status">Bio:</label>
                <input type="text" name="bio" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>

        </div>
    </div>

    </div>
</form>
