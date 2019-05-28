<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Validator;
use App\Http\Requests\EditProfile;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{ 
    public function users()
    {
        $auth_id = Auth::user()->id;
        $users = User::where('id', '!=', $auth_id)->get();
        // dd(auth()->user()->following()->find());
        return view('users', compact('users'));
    }
    public function user_home($id)
    {
        $user = User::find($id);
        $blogs = $user->blogs()->get();
        return view('user_home', compact('users'));
    }

}