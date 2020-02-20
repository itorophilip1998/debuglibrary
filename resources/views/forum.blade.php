@extends('layouts.app') @section('content')
<br>
<div class="p-1">
    <div class="row">
        @include('layouts.sidebar')
        <div class="col-md-8 col-sm-12 ">
            <h2 class="text-center text">Forum <i class="fa fa-tv" aria-hidden="true"></i></h2>
            <hr>
            <div class="container-fliud">
                <div class="form p-5 shadow-lg px-0 mastercard mr-auto ">
                 <!-- <div class="form py-2  shadow-lg px-0 rounded-lg mr-auto">  -->
                <!-- <button type="button" class="btn btn-primary mr-auto"  data-toggle="modal" data-target="#exampleModal">Add post</button></a> -->
                <br>

                <!-- Button trigger modal -->
<button type="button" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Post
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Title</h5><br>
                <input type="text" name="name" placeholder="Enter Title" class="form-control" require>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
      <textarea placeholder="Enter Comment" class="form-control" name="message"></textarea>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
                <i class="fa text-allbtn   fa-2x  fa-eye-slash" aria-hidden="true">  No post found.... </i>

                
                <!-- modal group -->
                <!-- <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <div class="modal-body">
        <p>Modal body text goes hree.</p>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div> -->
        <!-- <a href="/form" class="btn btn-md allbtn1 >  Add Post </a> -->



          <br>
           @if(count($posts) > 0)
          @foreach($posts  as $post)
          <div class="blog w-75 p-4 m-auto allbtn rounded-lg" style="border:1px solid lightgrey">
            <div class="title"><a href="/show/{{$post->id}}" class="allbtn"><h4>{{$post->title}} </h4></a></div>
            <div class="body allbtn" style="font-size:20px"><p>{{$post->body}}</p></div>
            <div class="footer  " style="font-size:11px;font-style:italic;">Posted on {{$post->created_at->format('d D M Y')}} <br>
          <h6 class="float-right allbtn ">Posted by <a href="" class="allbtn"> <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></h6>
            </div>
            <br>
            <div class="commentbox text-center rounded-pill mt-3" style="border:1px solid lightgrey;">  
              <a href="/allcomment/{{$post->id}}" style="font-size:18px;text-decoration:none"  class="allbtn" ><i class="fa fa-comment allbtn" aria-hidden="true">Comment </i><sup>222</sup> </a> 
              <a href="" style="font-size:18px;text-decoration:none" class="allbtn"> <i class="fa fa-thumbs-up allbtn" aria-hidden="true"></i> Like</i><sup>1220</sup></a> 
            </div>
       </div>


       @endforeach
             
          @else 
          <div class="post">
          </div>
          @endif  
    




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
