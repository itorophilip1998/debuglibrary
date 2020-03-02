
   <ul class="mobile-view m-auto col-12 ">
   <li> <a href="/home" class="btn btn-default text  "><i class="fa fa-home " aria-hidden="true"></i></a></li>
   <li> <a href="/dashboard" class="btn btn-default text  "><i class="fa fa-dashboard " aria-hidden="true"></i></a></li>
   <li> <a href="/forum" class="btn btn-default text "> <i class="fa fa-tv " aria-hidden="true"></i></a></li>
   <li> <a href="/chat" class="btn btn-default text"> <i class="fa fa-comments " aria-hidden="true"></i> </a></li>
   <li> <a href="/friends" class="btn btn-default text "> <i class="fa fa-users" aria-hidden="true"></i></a></li>
<br>
  </ul>
 <div class="col-md-4 col-lg-3 col-sm-5">
    <ul class="list-group shadow-lg desktop-view " style="position:fixed;">
        <li class="list-group-item d-flex justify-content-between align-items-center">
       <a href="/home" class="btn btn-default text"><i class="fa fa-home fa-2x mr-3" aria-hidden="true"></i><span class="text-secondary">Home</span> </a>
         </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
       <a href="/dashboard" class="btn btn-default text"><i class="fa fa-dashboard fa-2x mr-3" aria-hidden="true"></i><span class="text-secondary">Dashboard</span> </a>
        <span class="badge badge-secondary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
         <a href="/forum" class="btn btn-default text"><i class="fa fa-tv fa-2x mr-3" aria-hidden="true"></i><span class="text-secondary">Forum</span> </a>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/chat" class="btn btn-default text"><i class="fa fa-comments fa-2x mr-3" aria-hidden="true"></i> <span class="text-secondary">Chat</span> </a>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/friends" class="btn btn-default text"><i class="fa fa-users fa-2x mr-3" aria-hidden="true"></i> <span class="text-secondary"> Friends</span> </a>
        <span class="badge  badge-secondary badge-pill">20 </span>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <form  action="{{ route('logout') }}" method="POST" >
            @csrf
          <button type="submit" class="btn btn-default text pl-3"><i class="fa fa-power-off  fa-2x mr-3" aria-hidden="true"></i>&ensp;<span class="text-secondary">Logout</span> </button>
        </form>
        </li>
              <br> <br>

              <div class="activefriends">
              <div class="text-center rounded-lg" style="border:1px solid lightgrey">Active Friends</div>

              <br>

              <div class="row mb-2 pl-2">
                  <div class="col-2"><a href="/dashboard/"><img src="/images/logo.jpg"  class="rounded-circle" style="width:40px;height:38px"></a></div>
                  <div class="col-10 pt-2"><a href="/chat/"  class="text"><h6 >itoro emmanuelPilip</h6></a></div>
              </div>

      </ul>
      <br><br>
 </div>
<style>
  @media(max-width:770px) and (min-width:200px)
  {

               .desktop-view{
                display: none;

               }
               .mobile-view >li{
                 display: inline-block;
                 list-style: none;
                 padding-left: 20px;
                 width: 80px;
               }
               .mobile-view >li>a>i
               {
                 font-size:20px !important;
                }
                ul
                .mobile-view >li a:hover,.mobile-view >li a:focus,.mobile-view >li a:active{
                   color:grey !important;
                   border-bottom:2px solid grey ;
                   opacity: 80%;
                   text-align: center;
                   width: 100px;
                }
                .mobile-view >li>a:focus{
                    color:grey !important;
                   border-bottom:2px solid grey ;
                }
                .mobile-view >li .a{
                border-right: 1px solid lightgrey;

                }
              .mobile-view{
                 border-bottom: 4px solid lightgrey;
                 border-radius: 5px;
                 text-align: center;


               }
  }
  @media(min-width:771px){
    .mobile-view{
                 display: none;
               }
               .desktop-view{
                 display: block;
               }
  }
</style>
