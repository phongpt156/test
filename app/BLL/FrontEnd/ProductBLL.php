<?php

namespace App\BLL\FrontEnd;
use App\Dal\ProductDAL;

class ProductBLL 
{
	public static function GetNewestProducts() {
		return ProductDAL::GetNewestProducts();
	}

	public static function GetMostLikeProducts() {
		return ProductDAL::GetMostLikeProducts();
	}

	public static function GetDiscountProducts() {
		return ProductDAL::GetDiscountProducts();
	}

	public static function GetTendencyProducts() {
		return ProductDAL::GetTendencyProducts();
	}

	public static function GetOneProduct($id) {
		return ProductDAL::GetOneProduct($id);
	}
	public static function GetFeatureValueProduct($id) {
		return ProductDAL::GetFeatureValueProduct($id);
	}
	public static function GetFeatureNameProduct($id) {
		return ProductDAL::GetFeatureNameProduct($id);
	}
}