<br><br><br>
<footer class="p-3 shadow-lg">
    <div class="container-fluid">
    {{-- <i class="fa fa-copyright" aria-hidden="true"></i> Debuglibrary --}}

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-sm-12">

            <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width:55px; height:55px; position:relative;  border-radius:50%"> <span class="userprofi" ><h5>{{ Auth::user()->username}}</h5></span>

        </div>
        </div>
        <br>

        <hr width="100%" >
        {{-- <div class="col-12 col-md-6 col-lg-4 col-sm-12">
            Friends All
        </div> --}}
        <div class="row mt-2">
            <hr>

            <div class="col-12 col-md-6 col-lg-4 col-sm-12 col-xl-6">
                <ul><a href="/friends">Friends</a></ul>
                <ul>Help</ul>
                <ul>Settings & Privacy</ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-sm-12 col-xl-6">
                <ul>Report a problem</ul>
                <ul>Terms & Policies</ul>
            <ul><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}</a> </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <button class="btn col-12 rounded-lg border-secondary">Back to Top</button>
    </div>
</div>
</footer>

<style>
    .userprofi{
        margin-left: 5% !important;
        margin-top: 3% !important;
        font-size: 14px !important;
        position: absolute;
    }
</style>
