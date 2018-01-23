<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

public function index(){
    $data = session()->all();

    return view('products.index')->withSessions($data);
	}



}
