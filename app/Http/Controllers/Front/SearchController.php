<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\BLL\FrontEnd\ProductBLL;
class SearchController extends Controller
{
    //
    public static function index(Request $request) {
    	$url = $request->all();
    	$products = ProductBLL::SearchProduct($url);
    	$id = ProductBLL::GetIdFirstProduct($products);
    	$product = ProductBLL::GetOneProduct($id);
    	$product_group = ProductBLL::GetProductGroup($id);
        $feature_value = ProductBLL::GetFeatureValueProduct($id);
        $feature_name = ProductBLL::GetFeatureNameProduct($id);
        $param = compact('products', 'product', 'feature_value', 'feature_name', 'product_group');
        return view('front.home.search-page', $param);
    }
}
