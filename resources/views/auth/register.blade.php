@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg"> 
                <div class="card-header regitrationcardheader">{{ __('Register') }} <i class="fa fa-book color float-right fa-2x" aria-hidden="true"></i></div>

                <div class="card-body regitrationcardbody">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 registertext col-form-label text-md-right">{{ __('Username') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="username" placeholder="(e.g) peterparker" type="text" class="rounder-1 form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="registertext" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 registertext col-form-label text-md-right">{{ __('Email') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="email"  placeholder="(e.g) peterpaker@gmail.com" type="email" class="rounder-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="registertext" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="registertext col-md-4 col-form-label text-md-right">{{ __('Password') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control rounder-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="registertext" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="registertext col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }} <span class="required">*</span></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control rounder-1" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn allbtn col-12 rounder-1 ">
                                    {{ __('Register') }}
                                </button>  
                                <br><br>
                                <a href="/login" class="btn btn-dark col-12 mdbtn rounder-1 " style="display: none;">
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
