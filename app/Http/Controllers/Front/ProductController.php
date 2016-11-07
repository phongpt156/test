<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\ProductBLL;
class ProductController extends Controller
{
    //
    public static function GetNewestProducts() {
    	$newest_products = ProductBLL::GetNewestProducts();
    	return view('front.product.newestproduct', compact('newest_products'));
    }

    public static function GetMostLikeProducts() {
    	$most_like_products = ProductBLL::GetMostLikeProducts();
    	return view('front.product.most-like-product', compact('most_like_products'));
    }

    public static function GetDiscountProducts() {
    	$discount_products = ProductBLL::GetDiscountProducts();
    	return view('front.product.discount-product', compact('discount_products'));
    }

    public static function GetTendencyProducts() {
    	$tendency_products = ProductBLL::GetTendencyProducts();
    	return view('front.product.tendency-product', compact('tendency_products'));
    }
}
