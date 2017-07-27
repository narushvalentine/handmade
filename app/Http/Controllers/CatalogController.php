<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use App\Product;

class CatalogController extends Controller
{
    //
		public function index()
		{
			$categories = Category::whereNull('parent_id')->get();
			$products = Product::paginate(9);
			return view('front.catalog',[
				'categories'=>$categories,
				'products'=>$products
			]);
		}
}
