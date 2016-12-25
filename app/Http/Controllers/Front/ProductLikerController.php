<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\ProductLikerBLL;
use App\BLL\FrontEnd\ProductBLL;
use Illuminate\Support\Facades\Auth;

class ProductLikerController extends Controller
{
    //
    public static function UpdateProductLiker()
    {
    	if(Auth::check())
    	{
    		if(isset($_GET['product']))
    		{
    			$product_id = $_GET['product'];
    			//$user_id = Auth::user()->id;
    			$user_id = Auth::user()->id;
    			$like = ProductBLL::GetLikeProduct($product_id);
    			if(!ProductLikerBLL::CheckExistProductLiker($product_id, $user_id))
    			{
    				++$like;
    				ProductLikerBLL::InsertProductLiker($product_id, $user_id);
                    ProductBLL::UpdateLikeProduct($product_id, $like);
                    return 1;
    			}
    			else
    			{
    				--$like;
    				ProductLikerBLL::RemoveProductLiker($product_id, $user_id);
                    ProductBLL::UpdateLikeProduct($product_id, $like);
                    return 0;
    			}
    		}
    	}
    	return 0;
    }
}
