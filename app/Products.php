<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class Products extends Model
{
    public static function getProducts(){
		$products = DB::table('products')->get();
	
		return $products;
    }
}
