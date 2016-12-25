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
						->select('p.id as id', 'p.name as p_name', 'p.price', 'p.discount', 'p_i.name as p_i_name', 'p_i.alt', 'p_r.like', 's.name as s_name', 's.address as s_address', 'p.created_at');
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
	public static function SearchProductQuery($info) {
		$products = ProductDAL::ProductQuery();
    	$where = [];
        $orWhere = [];
    	if(isset($info['product']['name']))
    	{
    		$where[] = ['p.name', 'like', '%' . $info['product']['name'] . '%'];
    	}
    	if(isset($info['cate']))
    	{	
    		$products = $products
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
            $products = $products
                        ->join('product_feature_value as pfv', 'p.id', '=', 'pfv.product_id')
                        ->join('feature as f', 'pfv.feature_id', '=', 'f.id')
                        ->whereIn('pfv.feature_value', $info['product']['feature'])
                        ->orWhereIn('pfv.vns_feature_value', $info['product']['feature']);
        }
    	$products = $products
                    ->where($where)
                    ->orWhere($orWhere)
                    ->orderBy('p.created_at');
        return $products;
	}
	public static function GetSearchProductQueryResult($products)
	{
		$products = $products->paginate('16')->setPath('product/newest');
		return $products;
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
	public static function GetIdFirstProduct($products)
	{
		$id = $products->pluck('id')->first();
		return $id;
	}
	public static function GetProductGroup($id)
	{
		$products = DB::table('product as p')
					->join('product_group as p_g', 'p.id', '=', 'p_g.product_id')
					->join('product_group_image as p_g_i', 'p_g.id', '=', 'p_g_i.product_group_id')
					->leftJoin('supplier as s', 'p_g.supplier_id', '=', 's.id')
					->where('p.id', $id)
					->select('p_g.name as p_g_name', 's.name as s_name', 'p_g_i.name as p_g_i_name', 'p_g_i.alt as p_g_i_alt', 'p_g_i.description as p_g_i_des')
					->get();
		return $products;
	}
	public static function GetLikeProduct($id)
	{
		$like = DB::table('product as p')
					->leftJoin('product_rating as p_r', 'p.id', '=', 'p_r.product_id')
					->where('p.id', '=', $id)
					->pluck('p_r.like')
					->first();
		return $like;
	}
	public static function UpdateLikeProduct($product_id, $like)
	{
		$status = DB::table('product_rating as p_r')
					->where('p_r.id', '=', $product_id)
					->update(['p_r.like' => $like]);
		return $status;
	}
}