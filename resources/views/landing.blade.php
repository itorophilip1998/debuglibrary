<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>DebugLibrary | Welcome Page</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <link rel="shortcut icon" href="{{URL::to('images/favicon.PNG')}}" type="image/x-icon">
        
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <!-- Styles --> 
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
        <style>
           * {
     font-size: 18px;
 }
/* animation and transition */
#animation-header  h1 {
    font-size: 50px;
    line-height: 1.3;
    position: relative;
    animation: heading;
    animation-duration: 3s;
    animation-fill-mode: forwards;
}
.appname {
            color: rgb(209, 207, 211)!important;
            border-left: 1px solid rgb(209, 197, 205);
            padding-left: 4px;
        }
@keyframes heading {
    0% {
        top: -300px
    }
    100% {
        top: 0px
    }
}
.lead{
    position: relative;
    animation-name: content;
    animation-duration: 3s;
    animation-fill-mode: forwards;
}

@keyframes content {
    0% {
        left: -1000px;
    }
    100% {
        left: 0px;
    }
}
.color {
            color: rgb(209, 207, 211)!important;
        }
        
        .background {
            background-color: indigo !important;
            opacity: 80%;
        }
.btn {   
    position: relative;
    animation-name: btn;
    animation-duration: 10s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}

@keyframes btn {
  0% {
    transform: rotateY(180deg);

    }
    100% {
      transform: rotateY(0deg);

    }
}
 
 /* Styling for the main section  */
 .allbtn {
    background-color: rgb(90, 14, 145) !important;
    color: whitesmoke !important;
    opacity: 80%;
    font-weight: 600;
    font-size: 1.25rem;
}

.allbtn:hover{
  background-color: white !important;
  color: rgb(90, 14, 145) !important;
  border-color: rgb(90, 14, 145) !important;
}

h1.bd-text-bright{
    color: indigo !important;
    opacity: 80%;
}

.logbtn {
    color: indigo !important;
    border-color: indigo !important;
    font-weight: 600;
    font-size: 1.25rem;
    opacity: 80%;
}

.logbtn:hover{
  background-color: rgb(90, 14, 145) !important;
  color: whitesmoke !important;
  
}
.btn.btn-light{
    color: indigo !important;
    border-color: whitesmoke !important;
    font-weight: 600;
    font-size: 1.25rem;
    
}

.btn.btn-secondary{
    color: white !important;
    
    font-weight: 600;
    font-size: 1.25rem;
    
}

p.lead{
    font-weight: 300 !important;
    margin: 0 0 16px !important;
    color: #212529;
    line-height: 1.5;
    
}

.text-muted {
    color: #6c757d!important;
    font-size: 16px !important;
}

.img-fluid {
    max-width: 100%;
    height: auto;
    overflow: hidden;
    vertical-align: middle;
}

.bd-masthead {
    position: relative;
    padding: 3rem 15px;
    
}
.navbar,
        .navbar-ul>li>a {
            background-color: indigo !important;
            color: whitesmoke !important;
            opacity: 80%;
        }
        
 body { 
	
   background-color:white !important;  
}
.img{
  background-image:url('https://tek2d.com/wp-content/uploads/2019/01/UI-UX.jpg');
  background-size:cover !important;
  height:100vh !important;
}
             
        </style>
    </head>
    <body> 
      <nav class="navbar navbar-expand-md  shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand m-auto" href="{{ url('/') }}">
                <span class="Logo"><img src="{{ URL::to('images/loop1.png') }}" alt="" width="31px" height="30px"></span>
                <span class="appname">DebugLibrary</span>
            </a>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto navbar-ul">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; padding-left: 50px" vpre>
                            <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                            {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
      <main class="bd-masthead">
        <div class="container">
          <div class="row">
          
            <div class="col-md-6 text-center text-md-left " >
              
      <br> 
      <br> 
            <div id="animation-header">
              <h1 class="mb-3 bd-text-bright ">DebugLibrary</h1>
            </div>
              <div id="animation-body">
                <p class="lead">
                  A community of people with like minds with the passion to provide solutions to challenges related to both harware and software.  
                </p>
                <p class="lead mb-4">
                  DebugLibrary is a platform for developers and people into ICT to collaborate and render tech-based solutions to problems that are tech inclined. Come and join this great community!
                </p>
              </div>
              <div class="row mx-n2">
                <div class="col-md px-2">
                  <a href="{{ route('register') }}"  id="btn" class="btn btn-lg btn-bd-primary rounded-pill allbtn w-100 mb-3 animationbtn-1" >Get started</a>
                </div>
                <div class="col-md px-2">
                  <a href=" {{route('login')}} " id="btn" class="btn btn-lg btn-outline-secondary rounded-pill logbtn w-100 mb-3 animationbtn-2" >Login</a>
                </div>
                
              </div>
              <p class="text-muted mb-0">
                Currently v1.0.0
              </p>
              
            </div>
            <div class="col-12 img col-md-6 pt-0 ">
               
            </div>
    
          </div>
        </div>
      </main>
     
    
<script src="{{URL::to('js/script.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>


