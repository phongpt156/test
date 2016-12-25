<?php

namespace App\BLL\FrontEnd;
use App\Dal\UserDAL;

class UserBLL 
{
	public static function AddUser($request)
	{
		return UserDAL::AddUser($request);
	}
	public static function CheckExistPhoneNumber($phone_number)
	{
		return UserDAL::CheckExistPhoneNumber($phone_number);
	}
}