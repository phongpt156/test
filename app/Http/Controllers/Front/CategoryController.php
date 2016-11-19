<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\CategoryBLL;
class CategoryController extends Controller
{
    //
    public static function GetMaleCategories() {
    	$male_categories = CategoryBLL::GetMaleCategories();
    	return view('front.category.male-category', compact('male_categories'));
    }

    public static function GetFeMaleCategories() {
    	$female_categories = CategoryBLL::GetFemaleCategories();
    	return view('front.category.female-category', compact('female_categories'));
    }
}
