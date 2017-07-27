<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

class Product extends Model
{

		public function index()
		{
			$products = DB::table('products')->paginate(15);
			return view('front.catalog', ['products' => $products]);	 
		}

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Voyager::modelClass('Category'), 'id', 'category_id');
    }

    /**
     *   Method for returning specific thumbnail for post.
     */
    public function thumbnail($type)
    {
        // We take image from posts field
        $image = $this->attributes['image'];
        // We need to get extension type ( .jpeg , .png ...)
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        // We remove extension from file name so we can append thumbnail type
        $name = rtrim($image, '.'.$ext);
        // We merge original name + type + extension
        return $name.'-'.$type.'.'.$ext;
    }
}

