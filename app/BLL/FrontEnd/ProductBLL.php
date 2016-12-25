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
	public static function GetUserNewestProducts($id) {
		return ProductDAL::GetUserNewestProducts($id);
	}

	public static function GetUserMostLikeProducts($id) {
		return ProductDAL::GetUserMostLikeProducts($id);
	}

	public static function GetUserDiscountProducts($id) {
		return ProductDAL::GetUserDiscountProducts($id);
	}

	public static function GetUserTendencyProducts($id) {
		return ProductDAL::GetUserTendencyProducts($id);
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
	public static function SearchProductQuery($url) {
		return ProductDAL::SearchProductQuery($url);
	}
	public static function GetSearchProductQueryResult($products) {
		return ProductDAL::GetSearchProductQueryResult($products);
	}
	public static function GetIdFirstProduct($products) {
		return ProductDAL::GetIdFirstProduct($products);
	}
	public static function GetProductGroup($id) {
		return ProductDAL::GetProductGroup($id);
	}
	public static function GetLikeProduct($id) {
		return ProductDAL::GetLikeProduct($id);
	}
	public static function UpdateLikeProduct($product_id, $like) {
		return ProductDAL::UpdateLikeProduct($product_id, $like);
	}
}