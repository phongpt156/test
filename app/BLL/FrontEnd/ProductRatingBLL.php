<?php

namespace App\BLL\FrontEnd;
use App\Dal\ProductRatingDAL;

class ProductRatingBLL 
{
	public static function UpdateRating($product_id, $action, $status) {
		return ProductRatingDAL::UpdateRating($product_id, $action, $status);
	}
}