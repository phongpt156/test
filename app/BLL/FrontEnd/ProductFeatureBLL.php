<?php

namespace App\BLL\FrontEnd;
use App\Dal\ProductFeatureDAL;

class ProductFeatureBLL 
{
	public static function GetFeatureDefaultValue($feature_name = null) {
		return ProductFeatureDAL::GetFeatureDefaultValue($feature_name);
	}
}