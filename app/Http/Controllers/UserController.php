<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function postSignIn(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::User();
            if($user->role == 'admin')
                return redirect()->route('dashboard');
            else
                return redirect()->route('homepage');
        }
        return redirect()->back();
    }

    public function getDashboard(){
        return view('dashboard');
    }

    public function getHomepage(){
        return view('homepage');
    }

    public function postAddNewUser(Request $request){
        $this->validate($request, [
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'password1' => 'required|min:4',
            'password2' => 'required|min:4',
            'phone1' => 'required',
            'company_name' => 'required'
        ]);

        if($request['password1'] == $request['password2']) {
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password1']);
            $user->phone1 = $request['phone1'];
            $user->phone2 = $request['phone2'];
            $user->company_name = $request['company_name'];
            $user->role = 'user';

            $user->save();

            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    public function getLogout(){
        Auth::logout();

        return redirect()->route('welcome');
    }

    public function getHome(){
        $user = Auth::user();

        if($user != null) {
            if ($user->role == 'admin')
                return redirect()->route('dashboard');
            else if ($user->role == 'user')
                return redirect()->route('homepage');
        }

        return redirect()->back();
    }
}
