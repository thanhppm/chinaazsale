<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    public function login()
    {
        return view('templates.login');
    }

    public function post_Login(Request $request)
    {
        // $arr=['email'=>$request->email,'password'=>$request->password];
        // if(Auth::attempt($arr) && Auth::check())
        // {
        //     return view('demo');
        // }
        // else{
        //     return view('login');
        // }

        if ($request->method() == 'POST') {
            $login = [
                'email' => $request->email,
                'password' => $request->password,
                 'role' => 'admin',
                 //'status' => 1
            ];
            if (Auth::attempt($login) && Auth::check()) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('notification', 'Email hoặc mật khẩu không chính xác');
            }
        }
    }

    public function register()
    {
        return view('register');
    }


    public function post_Register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
            'passwordAgain' => 'required|same:password'
        ], [
            'name.required' => 'ban chua nhap ten',
            'name.unique' => 'ten bi trung',
            'email.required' => 'ban chua nhap email',
            'email.email' => 'ban chua nhap dung dinh dang email',
            'email.unique' => 'email da ton tai',
            'password.required' => 'ban chua nhap mat khau',
            'password.min' => 'mật khẩu tối thiểu chứa 6 kí tự',
            'password.max' => 'mật khẩu tối đa chứa 20 kí tự',
            'passwordAgain.required' => 'ban chua nhap lai mat khau',
            'passwordAgain.same' => 'mat khau khong trung khop',
        ]);


        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->role = 'member';
        $res =  $user->save();
        if ($res == true) {
            return redirect()->route('login')->with('status', 'tao tai khoan thanh cong');
        } else {
            return redirect()->route('register');
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('templates.login');
    }
}
