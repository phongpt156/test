<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\CollectionBLL;
use App\BLL\FrontEnd\ProductBLL;
use App\BLL\FrontEnd\CategoryBLL;
use App\BLL\FrontEnd\ProductFeatureBLL;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function HomeIndex() {
    	$collections = CollectionBLL::GetCollections();
        $newest_products = ProductBLL::GetNewestProducts();
        $most_like_products = ProductBLL::GetMostLikeProducts();
        $discount_products = ProductBLL::GetDiscountProducts();
        $tendency_products = ProductBLL::GetTendencyProducts();
        $param = compact('collections', 'newest_products', 'most_like_products', 'discount_products', 'tendency_products');

    	return view('front.home.index', $param);
    }
    
    public static function GetOneProduct($id) {
        $product = ProductBLL::GetOneProduct($id);
        $feature_value = ProductBLL::GetFeatureValueProduct($id);
        $feature_name = ProductBLL::GetFeatureNameProduct($id);
        return view('front.home.product-detail', compact('product', 'feature_value', 'feature_name'));
    }
}