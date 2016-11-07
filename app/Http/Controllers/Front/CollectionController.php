<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BLL\FrontEnd\CollectionBLL;

class CollectionController extends Controller
{
    //
    public function GetCollections() {
    	$collections = CollectionBLL::GetCollections();
    	return view('front.home.collection', compact('collections'));
    }
}