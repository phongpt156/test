<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\CollectionBLL;
use App\BLL\FrontEnd\ProductBLL;
use App\BLL\FrontEnd\CategoryBLL;
use App\BLL\FrontEnd\ProductFeatureBLL;
class HomeController extends Controller
{
    //
    public function HomeIndex() {
    	$collections = CollectionBLL::GetCollections();
    	$newest_products = ProductBLL::GetNewestProducts();
    	$most_like_products = ProductBLL::GetMostLikeProducts();
    	$discount_products = ProductBLL::GetDiscountProducts();
    	$tendency_products = ProductBLL::GetTendencyProducts();
    	$male_categories = CategoryBLL::GetMaleCategories();
    	$female_categories = CategoryBLL::GetFeMaleCategories();
        $color_values = ProductFeatureBLL::GetFeatureDefaultValue('mau_sac');
        $pattern_values = ProductFeatureBLL::GetFeatureDefaultValue('hoa_tiet');
        $material_values = ProductFeatureBLL::GetFeatureDefaultValue('chat_lieu');

        $param = compact('collections', 'newest_products', 'most_like_products', 'discount_products', 'tendency_products', 'male_categories', 'female_categories', 'color_values', 'pattern_values', 'material_values');

    	return view('front.home.index', $param);
    }
}