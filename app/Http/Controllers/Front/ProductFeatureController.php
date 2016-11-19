<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\ProductFeatureBLL;
class ProductFeatureController extends Controller
{
    //
    public static function GetFeatureDefaultValue($feature_name = null) {
    	$values = ProductFeatureBLL::GetFeatureDefaultValue($feature_name);
    	if(count($values) !== 0) return view('front.productfeature.feature-default-value', compact('values'));
    	return 123;
    }
}
