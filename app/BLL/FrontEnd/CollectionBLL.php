<?php

namespace App\BLL\FrontEnd;
use App\Dal\CollectionDAL;

class CollectionBLL 
{
	public static function GetCollections() {
		return CollectionDAL::GetCollections();
	}
}