<?php
namespace App\DAL;
use App\Models\ProductFeature;
use Illuminate\Support\Facades\DB;
class ProductFeatureDAL
{
	public static function GetFeatureDefaultValue($feature_name = null) {
		$values = DB::table('feature_default_set as fds')
					->join('feature as f', 'fds.feature_id', '=', 'f.id')
					->select('fds.feature_default_value', 'fds.vns_feature_value')
					->where('f.name', 'like', "%$feature_name%")
					->get();
		return $values;
	}
}