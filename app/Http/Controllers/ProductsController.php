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

}