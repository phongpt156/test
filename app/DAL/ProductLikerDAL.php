<?php
namespace App\DAL;

use App\Models\ProductLiker;
use Illuminate\Support\Facades\DB;

class ProductLikerDAL
{
	public static function InsertProductLiker($product_id, $user_id)
	{
		$status = DB::table('product_liker')->insert(['product_id' => $product_id, 'liker_id' => $user_id]);
		return $status;
	}
	public static function RemoveProductLiker($product_id, $user_id)
	{
		$status = DB::table('product_liker')
			->where([
				['product_id', '=', $product_id],
				['liker_id', '=', $user_id]
			  ])
			->delete();
		return $status;
	}
	public static function CheckExistProductLiker($product_id, $user_id)
	{
		$exist = DB::table('product_liker')
			->where([
				['product_id', '=', $product_id],
				['liker_id', '=', $user_id]
			  ])
			->count();
		return $exist;
	}
	public static function GetProductLiker($user_id)
	{
		$list = DB::table('product_liker')
					->where('liker_id', '=', $user_id)
					->pluck('product_id');
		return $list->toArray();
	}
}