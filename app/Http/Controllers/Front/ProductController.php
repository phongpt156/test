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

    public static function GetOneProduct($id) {
        $product = ProductBLL::GetOneProduct($id);
        $feature_value = ProductBLL::GetFeatureValueProduct($id);
        $feature_name = ProductBLL::GetFeatureNameProduct($id);
        return view('front.home.product-detail', compact('product', 'feature_value', 'feature_name'));
    }
}
