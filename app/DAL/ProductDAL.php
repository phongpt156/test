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
						->select('p.id as id', 'p.name as p_name', 'p.price', 'p.discount', 'p_i.name as p_i_name', 'p_i.alt', 'p_r.like', 's.name as s_name', 'p.created_at');
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

	public static function SearchProduct($info) {
		$product = ProductDAL::ProductQuery();
    	$where = [];
        $orWhere = [];
    	if(isset($info['product']['name']))
    	{
    		$where[] = ['p.name', 'like', '%' . $info['product']['name'] . '%'];
    	}
    	if(isset($info['cate']))
    	{	
    		$product = $product
	    				->join('category as c', 'p.cate_id', '=', 'c.id');
    		if(isset($info['cate']['male']))
	    	{	
	    		$where[] = ['c.gender', 'not like', '%nu%'];
	    		foreach($info['cate']['male'] as $key => $value)
	    		{
	    			$where[] = ['p.cate_id', '=', $value];
                    $orWhere[] = ['c.sub_id', '=', $value];
	    		}
	    	}
	    	if(isset($info['cate']['female']))
	    	{
	    		$where[] = ['c.gender', 'not like', '%nam%'];
	    		foreach($info['cate']['female'] as $key => $value)
	    		{
	    			$where[] = ['p.cate_id', '=', $value];
                    $orWhere[] = ['c.sub_id', '=', $value];
	    		}
	    	}
    	}
    	if(isset($info['product']['feature'])) 
        {
            $product = $product
                        ->join('product_feature_value as pfv', 'p.id', '=', 'pfv.product_id')
                        ->join('feature as f', 'pfv.feature_id', '=', 'f.id')
                        ->whereIn('pfv.feature_value', $info['product']['feature'])
                        ->orWhereIn('pfv.vns_feature_value', $info['product']['feature']);
        }
    	$product = $product
                    ->where($where)
                    ->orWhere($orWhere)
                    ->get();
        return $product;
	}

	public static function GetOneProduct($id)
	{
		$product = ProductDAL::ProductQuery()
					->where('p.id', '=', $id)->get();
		return $product;
	}
	public static function GetFeatureValueProduct($id) 
	{
		$feature_value = DB::table('product as p')
						->join('product_feature_value as pfv', 'p.id', '=', 'pfv.product_id')
						->where('p.id', '=', $id)
						->select('pfv.feature_value', 'pfv.vns_feature_value', 'pfv.feature_id')
						->get();
		return $feature_value;
	}
	public static function GetFeatureNameProduct($id)
	{
		$feature_name = DB::table('product as p')
						->join('product_feature_value as pfv', 'p.id', '=', 'pfv.product_id')
						->join('feature as f', 'pfv.feature_id', '=', 'f.id')
						->select('f.id', 'f.name')
						->where('p.id', '=', $id)
						->groupBy('f.id', 'f.name')
						->get();
		return $feature_name;
	}
}