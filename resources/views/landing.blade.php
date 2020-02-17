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
        <style>
           * {
     font-size: 18px;
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
 
 body { 
	
     background-color: whitesmoke;
}
             
        </style>
    </head>
    <body>
      <main class="bd-masthead">
        <div class="container">
          <div class="row">
            <div class="col-6 mx-auto col-md-6 order-md-2">
              <img src=" {{URL::to('images/uiux.PNG')}} " alt="#"  class="img-fluid mb-3 mb-md-0 w-100 rounded-lg" >
              
            </div>
    
            <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5 " >
              <h1 class="mb-3 bd-text-bright">DebugLibrary</h1>
              <p class="lead">
                A community of people with like minds with the passion to provide solutions to challenges related to both harware and software.  
              </p>
              <p class="lead mb-4">
                DebugLibrary is a platform for developers and people into ICT to collaborate and render tech-based solutions to problems that are tech inclined. Come and join this great community!
              </p>
              <div class="row mx-n2">
                <div class="col-md px-2">
                  <a href="{{ route('register') }}" class="btn btn-lg btn-bd-primary rounded-pill allbtn w-100 mb-3">Get started</a>
                </div>
                <div class="col-md px-2">
                  <a href=" {{route('login')}} " class="btn btn-lg btn-outline-secondary rounded-pill logbtn w-100 mb-3">Login</a>
                </div>
                
              </div>
              <p class="text-muted mb-0">
                Currently v1.0.0
              </p>
              
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


