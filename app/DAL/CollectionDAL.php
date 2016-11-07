<?php
namespace App\DAL;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
class CollectionDAL
{
	public static function GetCollections() {

		// get collection information order by created time
		$collections = DB::table('collection as c')
						   ->join('collection_image as c_i', 'c.id', '=', 'c_i.collection_id')
						   ->select('c.name as c_name', 'c.created_at', 'c_i.name as c_i_name', 'c_i.description', 'c_i.alt')
						   ->orderBy('c.created_at', 'desc')
						   ->paginate(9);
		$collections->setPath('collection');
		return $collections;
	}
}