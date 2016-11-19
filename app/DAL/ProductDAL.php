<?php
namespace App\DAL;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductDAL
{
	public static function ProductQuery() {
		$products = DB::table('product as p')
						->join('product_image as p_i', 'p.id', '=', 'p_i.product_id')
						->join('supplier as s', 'p.supplier_id', '=', 's.id')
						->join('product_rating as p_r', 'p.id', '=', 'p_r.product_id')
						->select('p.name as p_name', 'p.price', 'p.discount', 'p_i.name as p_i_name', 'p_i.alt', 'p_r.like', 's.name as s_name', 'p.created_at');
		return $products;
	}
	public static function GetNewestProducts() {
		$products = ProductDAL::ProductQuery()
						->orderBy('p.created_at', 'desc')
						->paginate('16');
		$products->setPath('product/newest');
		return $products;
	}

	public static function GetMostLikeProducts() {
		$products = ProductDAL::ProductQuery()
						->orderBy('p_r.like', 'desc')
						->paginate('16');
		$products->setPath('product/most-like');
		return $products;
	}

	public static function GetDiscountProducts() {
		$products = ProductDAL::ProductQuery()
						->orderBy('p.discount', 'desc')
						->paginate('16');
		$products->setPath('product/discount');
		return $products;
	}

	public static function GetTendencyProducts() {
		$products = ProductDAL::ProductQuery()
						->orderBy('p_r.buy', 'desc')
						->paginate('16');
		$products->setPath('product/tendency');
		return $products;
	}
}