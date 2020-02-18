 
 <div class="col-md-3 col-sm-12 ">
   <ul class="mobile-view"> 
   <li> <a href="/dashboard" class="btn btn-default text"><i class="fa fa-dashboard mr-3" aria-hidden="true"></i></a></li>
   <li> <a href="/forum" class="btn btn-default text"> <i class="fa fa-address-book mr-3" aria-hidden="true"></i></a></li>
   <li> <a href="/chart" class="btn btn-default text"> <i class="fa fa-tv mr-3" aria-hidden="true"></i> </a></li>
   <li> <a href="/friends" class="btn btn-default text"> <i class="fa fa-users mr-3" aria-hidden="true"></i></a></li>
   <li> <a href="/logout" class="btn btn-default text"> <i class="fa fa-power-off mr-3" aria-hidden="true"></i></a></li>
   
  </ul>
    <ul class="list-group shadow-lg desktop-view " style="position:fixed;"> 
        <li class="list-group-item d-flex justify-content-between align-items-center">
       <a href="/dashboard" class="btn btn-default text"><i class="fa fa-dashboard fa-2x mr-3" aria-hidden="true"></i><span>Dashboard</span> </a>
        <span class="badge background color badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
         <a href="/forum" class="btn btn-default text"><i class="fa fa-tv fa-2x mr-3" aria-hidden="true"></i><span>Forum</span> </a>
       
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center"> 
            <a href="/chat" class="btn btn-default text"><i class="fa fa-comments fa-2x mr-3" aria-hidden="true"></i> <span>Chat</span> </a>
      
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/friends" class="btn btn-default text"><i class="fa fa-users fa-2x mr-3" aria-hidden="true"></i> <span>Friends</span> </a>
        <span class="badge background color badge-pill">20 </span>

        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <form  action="{{ route('logout') }}" method="POST" >
            @csrf
               <button type="submit" class="btn btn-default text pl-3"><i class="fa fa-power-off  fa-2x mr-3" aria-hidden="true"></i>&ensp;<span>Logout</span> </button>
        </form>   
        </li>   
              <br> <br> 

              <div class="activefriends">
              <div class="text-center rounded-lg" style="border:1px solid lightgrey">Active Friends</div> 

              <br>
              <div class="row mb-2 pl-2"> 
                  <div class="col-2"><a href=""><img src="/images/logo.jpg"  class="rounded-circle" style="width:40px;height:38px"></a></div>
                  <div class="col-10 pt-2"><a href=""  class="text"><h6 >itoro emmanuelPilip</h6></a></div>
              </div> 
               <div class="row mb-2 pl-2"> 
                  <div class="col-2"><a href=""><img src="/images/logo2.jpg"  class="rounded-circle" style="width:40px;height:38px"></a></div>
                  <div class="col-10 pt-2"><a href="" class="text"><h6>Ekop happinessakpan</h6></a></div>
              </div> 
      </ul>
      <br><br>
 </div> 
<style>
  @media(max-width:800px) and (min-width:200px)
  {
                
               .desktop-view{
                display: none;

               }    
               .mobile-view >li{
                 display: inline-block;
                 list-style: none;
                 
               }
               .mobile-view >li>a>i
               {
                 font-size:20px;
                }
                .mobile-view >li a:hover,.mobile-view >li a:focus,.mobile-view >li a:active{
                   color:skyblue !important;
                   border-radius: 30px;
                   background-color:grey;
                   text-align: center;
                }
                .mobile-view >li> a:hover{

                }

              .mobile-view{
                 border-top: 1px solid lightgrey; 
                 border-bottom: 1px solid lightgrey;  
                  border-left: 1px solid lightgrey; 
                 border-right: 1px solid lightgrey; 
                 border-radius: 30px;
               }
  }
  @media(min-width:801px){
    .mobile-view{
                 display: none;
               }
               .desktop-view{
                 display: block;
               }
  }
</style>