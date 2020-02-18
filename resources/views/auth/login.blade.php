 @extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg mastercard border-lg" >
                <div class="card-header regitrationcardheader shadow-sm"><span class="card_title">{{ __('Login') }}</span> <i class="fa fa-user-circle-o color float-right fa-2x" aria-hidden="true"></i></div>

                <div class="card-body regitrationcardbody">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-11 m-auto">
                                <label for="email" class="col-12 registertext ml-0  col-form-label ">{{ __('Email') }} <span class="required">*</span></label>
                                <input id="email"  placeholder="(e.g) peterpaker@gmail.com" type="email" class=" rounded-pill rounder-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="registertext" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                        <div class="col-md-11 m-auto">

                            <label for="password" class="registertext ml-2  col-form-label ">{{ __('Password') }} <span class="required">*</span></label>

                            <input id="typepass" type="password" class="rounded-pill rounder-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><div class="slash"><i class ="fa fa-eye-slash" onclick="hidepass()"></i></div>

                                @error('password')
                                    <span class="registertext" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 ml-4 remem">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 ml-4 offset-0 logbtn">
                                <button type="submit" class="btn allbtn col-12 form-control rounder-1 rounded-pill ">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                <div class="col-md-5 ml-5 mt-0 forgetp">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot password?') }}
                                    </a>
                                @endif

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
