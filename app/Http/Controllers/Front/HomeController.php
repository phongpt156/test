<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\CollectionBLL;
use App\BLL\FrontEnd\ProductBLL;
class HomeController extends Controller
{
    //
    public function HomeIndex() {
    	$collections = CollectionBLL::GetCollections();
    	$newest_products = ProductBLL::GetNewestProducts();
    	$most_like_products = ProductBLL::GetMostLikeProducts();
    	$discount_products = ProductBLL::GetDiscountProducts();
    	$tendency_products = ProductBLL::GetTendencyProducts();
    	return view('front.home.index', compact('collections', 'newest_products', 'most_like_products', 'discount_products', 'tendency_products'));
    }
}