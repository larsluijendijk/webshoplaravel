<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{

	public function index(){
   		$products = Products::getProducts();    
    	return view('products.index', compact('products'));
	}

	public function create(){
		return view('products.create');
	}	

	public function insert(Request $request){
		if (Input::has('name','description','image','price','category')) {				
		$name = $request->input('name');
        $description = $request->input('description');
        $image = $request->input('image');
        $price = $request->input('price');
        $category = $request->input('category');	
	
		$data = array(
			'name'=>$name, 
			'description'=>$description, 
			'image'=>$image, 
			'price'=>$price, 
			'category'=>$category
			);
		$inserted = DB::table('products')->insert($data);
		return redirect('products/index');
	}
	else{
		echo"failed!";
	}
}

}	