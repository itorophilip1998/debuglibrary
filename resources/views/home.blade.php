@extends('layouts.app') 
@section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center text ">Home <i class="fa fa-home" aria-hidden="true"></i></h2>
            <hr>
        
            <div class="container-fliud">
                <div class="form p-5 shadow-lg px-0 mastercard ">
                  Home  Content here. ........





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
