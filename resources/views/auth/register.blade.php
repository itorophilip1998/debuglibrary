@extends('layouts.app')
@section('content')
<div class="container pt-5 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg mastercard border-lg" > 
                <div class="card-header regitrationcardheader shadow-sm"><span class="card_title">{{ __('Sign Up') }}</span> <i class="fa fa-book color float-right fa-2x" aria-hidden="true"></i></div>

                <div class="card-body regitrationcardbody">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-12 ml-2 registertext  col-form-label ">{{ __('Username') }} <span class="required">*</span></label>

                            <div class="col-md-12">
                                <input id="username" placeholder="(e.g) peterparker" type="text" class="rounded-pill rounder-1 form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="registertext alerter invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="email" class="col-12 registertext ml-2  col-form-label ">{{ __('Email') }} <span class="required">*</span></label>

                            <div class="col-md-12">
                                <input id="email"  placeholder="(e.g) peterpaker@gmail.com" type="email" class=" rounded-pill rounder-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="registertext alerter invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
      
                        <div class="form-group row">
                        <div class="col-md-6">

                            <label for="password" class="registertext ml-2  col-form-label ">{{ __('Password') }} <span class="required">*</span></label> 
 
                                <input id="password" type="password" class="rounded-pill rounder-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="registertext alerter invalid-tooltip" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                            </div> 
                           
                        <div class="col-md-6"> 
         
                            <label for="password-confirm" class="registertext ml-2  col-form-label ">{{ __('Confirm Password') }} <span class="required">*</span></label>  

                                <input id="password-confirm" type="password" class="rounded-pill rounder-1 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> 
                        <div class="form-group row ">
                            <div class="col-md-12 m-auto">
                                <button type="submit" class="btn allbtn col-12 form-control rounder-1 rounded-pill ">
                                    {{ __('Register') }}
                                </button>  
                                <br><br>
                                <a href="/login" class="btn btn-dark col-12 mdbtn rounder-1 rounded-pill" style="display: none;">
                                    {{ __('Login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
