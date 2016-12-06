<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\DAL\ProductDAL;
class SearchController extends Controller
{
    //
    public static function index(Request $request) {
    	$url = $request->all();
    	$products = ProductDAL::SearchProduct($url);
        return view('front.home.search-page', compact('products'));
    }
}
