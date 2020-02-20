@extends('layouts.app') 
@section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12  ">
            <h2 class="text-center  text">Chat <i class="fa fa-comments" aria-hidden="true"></i></h2>
            <hr>
            <div class="container">
                <div class="form p-5 shadow-lg px-0 mastercard ">

                      
                    {{-- chat container --}}
                 <div class="chat m-auto">
                     {{-- sender --}}
                 <div class="row ">
                <div class="col-11 m-auto">
                 <div class="row  ">
                    <span class="senderimage col-sm-2 col-3 col-md-2 col-lg-1 mt-2 p-2 pt-0">
                        <a href=""><img src="/images/logo.jpg"  class="rounded-circle" style="width:40px;height:38px"></a> 
                     </span> 
                    <span class="sender col-8">
                        itoro  ecececececec ececece ecece
                        itoro  ecececececec ececece ecece
                        itoro  ecececececec ececece ecece
                        itoro  ecececececec ececece ecece
                        itoro  ecececececec ececece ecece
                     </span> 
                    </div>
                </div>
                 </div>  
                 <br><br>
 
                     {{-- reciever --}}
                 <div class="row ">
                <div class="col-11 m-auto">
                 <div class="row "> 
                     <span class="reciever col-8 text-right color">
                        itoro eded edede dededed eded
                        itoro eded edede dededed eded
                        itoro eded edede dededed eded
                        itoro eded edede dededed eded
                    </span> 
                    <span class="recieverimage  col-sm-2 col-2 col-md-2 col-lg-1 mt-2 pt-0">
                        <a href=""><img src="/images/logo.jpg"  class="rounded-circle" style="width:40px;height:38px"></a> 
                     </span> 
                    </div>
                </div>
                 </div>   
                 <br>
                 <hr>
            <form action="">

        <div class="row">

          <div class="col-10 m-auto">
              <div class="row m-auto">
                <div class="col-8 pr-0 mt-1">
                    <input type="text" class="form-control rounded-pill" placeholder="Tell Your Friend's what on your mind">
                  </div>
                  <div class="col-3 pl-0">
                      <button class="btn text rounded-pill"><i class="fa fa-send fa-2x" aria-hidden="true"></i></button>
                   </div>
            </form>
                </div>
            </div>
        </div>

         </div>


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
