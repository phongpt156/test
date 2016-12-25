<?php
namespace App\DAL;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDAL
{
	public static function AddUser($request)
	{
		if(UserDAL::CheckExistPhoneNumber($request['phonenumber_regiter']) === 0)
		{
			$user = DB::table('user')
					->insert([
						'phone_number' => $request['phonenumber_register'], 
						'password' => Hash::make($request['password_register']), 
						'name' => isset($request['name_register']) ? $request['name_register'] : NULL,
						'email' => isset($request['email_register']) ? $request['email_register'] : NULL
					  ]);
			return $user;
		}
		return 0;
	}
	public static function CheckExistPhoneNumber($phone_number)
	{	
		$phone_number = DB::table('user as u')
						->where('u.phone_number', $phone_number)
						->count();
		return $phone_number;
	}
}