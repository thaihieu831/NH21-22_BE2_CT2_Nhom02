<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->status != 1) {
                return redirect()->route('auth.login')->with('message', 'Tài khoản đã bị khóa');
            }
            if (Auth::user()->role == 1) {
                return redirect()->route('showHome')->with('message', 'Đăng nhập thành công');
            } else {
                return view('admin.index');
            }
        } else {
            return redirect()->route('login')->with('message', 'Email hoặc mật khẩu không chính xác');
        }
    }
    public function showLogin()
    {
        return view('auth.login');
    }
    public function showRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:6|max:50',
                'email' => 'required|email',
                'avatar' => 'required|image|mimes:jpg,jpeg,png,gif|max:10000',
                'phone' => 'required|numeric|min:11',
                'password' => 'required|confirmed|min:6',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $destination_Path = public_path('image/avatar');
                $file_Name = time() . '_' . $file->getClientOriginalName();
                $file->move($destination_Path, $file_Name);
            } else {
                $file_Name = 'noname.jpg';
            }
            $user = DB::table('users')->where('email', $request->email)->first();
            if (!$user) {
                $newUser = new User();
                $newUser->name = $request->name;
                $newUser->email  = $request->email;
                $newUser->avatar = $file_Name;
                $newUser->phone = $request->phone;
                $newUser->password = $request->password;
                $newUser->role = $request->role;
                $newUser->status = $request->status;
                $newUser->save();
                return redirect()->route('register')->with('message', 'Tạo tài khoản thành công !');
            } else {
                return redirect()->route('register')->with('message', 'Tài khoản đã tồn tại !');
            }
        }
    }
}
