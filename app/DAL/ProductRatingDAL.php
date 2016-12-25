<?php
namespace App\DAL;

use App\Models\ProductRating;
use Illuminate\Support\Facades\DB;

class ProductRatingDAL
{
	public static function FindProduct($product_id)
	{
		$product = DB::table('product_rating')
					->where('product_id', '=', $product_id);
		return $product;
	}
	public static function GetProductActionRating($product, $action)
	{
		$rating = $product
				  ->pluck($action)
				  ->first();
		return $rating;
	}
	public static function UpdateRating($product_id, $action, $status)
	{
		$product = ProductRatingDAL::FindProduct($product_id);
		$rating = ProductRatingDAL::GetProductActionRating($product, $action);
		if($status === 1)
		{
			++$rating;
		}
		else --$rating;
		$update_status = $product
						 ->update([$action => $rating]);
		return $update_status;
	}
}