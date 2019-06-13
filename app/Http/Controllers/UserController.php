<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
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
        return view('users', compact('users'));
    }
    public function user_edit($id)
    {
        $user = User::find($id);
        return view('user_edit', compact('user'));
    }
    public function user_update(EditProfile $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->D_email = $request->input('D_email');
        $user->password =  Hash::make($request->input('password'));
        $user->save();
        return redirect('/home');
    }
}