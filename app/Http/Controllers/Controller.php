<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
//


// class UserController extends Controller
// {
//     public function user()
//     {
//         // $users = DB::table('username')->get();

//         // return view()-> with ('friends', ['username' => $users]);
//          $users = User::all();
//          return view('friends',compact('users'));

//     }
// }
