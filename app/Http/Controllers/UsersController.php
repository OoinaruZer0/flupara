<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\CreateUser;

class UsersController extends Controller
{
    public function getSignup() {
        return view('users.signup');
    }
    
    public function create(CreateUser $request)
    {
        $user = new User();
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->lastname_kana = $request->lastname_kana;
        $user->firstname_kana = $request->firstname_kana;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->zip31 = $request->zip31;
        $user->zip32 = $request->zip32;
        $user->pref31 = $request->pref31;
        $user->addr31 = $request->addr31;
        $user->save();
        
        return redirect()->route('index');
        
    }
    
    public function showLoginForm()
    {
        return view('users.signin');
    }
    
    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('index')->with('flash_message', 'ログインが完了しました。');
        } else {
            return redirect()->route('users.signin')->with('flash_message', 'ログインできませんでした。');
        }
    }
  
  public function getLogout(){
      Auth::logout();
      return redirect()->route('index');
  }
}
