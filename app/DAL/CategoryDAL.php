<?php
namespace App\DAL;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryDAL
{
	public static function CategoryQuery() {
		$categories = DB::table('category as c')
						->select('c.id as id', 'c.name as name', 'c.description as des', 'c.gender as gender', 'c.sub_id as sub_id')
						->orderBy('sub_id', 'ASC');
		return $categories;
	}

	public static function GetMaleCategories() {
		$categories = CategoryDAL::CategoryQuery()
								  ->where('c.gender', 'not like', '%nu%')
								  ->get();
		return $categories;
	}

	public static function GetFeMaleCategories() {
		$categories = CategoryDAL::CategoryQuery()
								  ->where('c.gender', 'not like', '%nam%')
								  ->get();
		return $categories;
	}
}