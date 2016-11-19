<?php

namespace App\BLL\FrontEnd;
use App\Dal\CategoryDAL;

class CategoryBLL 
{
	public static function GetMaleCategories() {
		return CategoryDAL::GetMaleCategories();
	}

	public static function GetFeMaleCategories() {
		return CategoryDAL::GetFeMaleCategories();
	}
}