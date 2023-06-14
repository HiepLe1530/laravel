<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index(){
        return view('admin.login');
    }
    public function postlogin(LoginRequest $request){
        // if(Auth::attempt([
        //     'email'=>$request->input('email'),
        //     'password'=>$request->input('password')
        // ])){
        //     echo "dang nhap thanh cong";

        // }
        // else{
        //     echo "dang nhap that bai";
        // }
        // $request->validate([
        //     'email'=>'required|email:filter',
        //     'password'=>'required|min:4'
        // ],[
        //     'email.required'=>'Trường email bắt buộc phải nhập',
        //     'email.email'=>'email ko đúng định dạng',
        //     'password.required'=>'Trường password bắt buộc phải nhập',
        //     'password.min'=>'Trường password phải lớn hơn 4 ký tự'
        // ]);
        $u = $this->user->finduser($request);
        if(!empty($this->user->finduser($request)[0])){
            return view('admin.home',['title'=>'Khóa học']);
        }
        else{
            return redirect()->back()->with('msg','Sai email hoặc password, vui lòng kiểm tra lại');
        }
    } 
}
