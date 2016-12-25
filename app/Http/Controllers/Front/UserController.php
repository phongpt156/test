<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\BLL\FrontEnd\UserBLL;

class UserController extends Controller
{
    //
    public static function AddUser(Request $request) 
    {
    	$user = UserBLL::AddUser($request);
    	if($user !== 0)
    	{
    		Auth::attempt(['phone_number' => $request['phonenumber_register'], 'password' => $request['password_register']]);
			return back()->withInput()->with(['register-status' => 1]);
    	}
    }
    public static function CheckExistPhoneNumber()
    {
    	if(isset($_GET['phonenumber_register'])) 
        {
            $phone_number = $_GET['phonenumber_register'];
        	$exist = UserBLL::CheckExistPhoneNumber($phone_number);
        	if($exist > 0)
        	{
        		$valid = 'false';
        	}
        	else $valid = 'true';
        	echo $valid;
        }
    }

    public static function LoginUser(Request $request)
    {
    	$login = Auth::attempt(['phone_number' => $request['phonenumber_login'] ,'password' => $request['password_login']]);
        if($login)
        {
            return back()->withInput();
        }
        return back()->withInput()->with('login-status', 'false');
    }

    public static function LogOut()
    {
        if(Auth::check())
        {
            Auth::logout();
            return back()->withInput();
        }
    }
    public static function ValidateUser(Request $request)
    {
        if(Auth::attempt(['phone_number' => $request['phonenumber_login'], 'password' => $request['password_login']]))
        {

        }
    }
    public static function CheckLogin()
    {
        if(Auth::check())
            return 1;
        return 0;
    }
}
