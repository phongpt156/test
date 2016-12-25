<?php

namespace App\BLL\FrontEnd;
use App\Dal\ProductLikerDAL;

class ProductLikerBLL 
{
	public static function InsertProductLiker($product_id, $user_id)
	{
		return ProductLikerDAL::InsertProductLiker($product_id, $user_id);
	}
	public static function CheckExistProductLiker($product_id, $user_id)
	{
		return ProductLikerDAL::CheckExistProductLiker($product_id, $user_id);
	}
	public static function RemoveProductLiker($product_id, $user_id) 
	{
		return ProductLikerDAL::RemoveProductLiker($product_id, $user_id);
	}
	public static function GetProductLiker($user_id)
	{
		return ProductLikerDAL::GetProductLiker($user_id);
	}
}