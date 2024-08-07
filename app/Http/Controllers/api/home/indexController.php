<?php

namespace App\Http\Controllers\api\home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\api\BaseController;

class indexController extends BaseController
{
    public function index(Request $request)
    {
        $products = Product::orderBy("prd_created_at","asc")->get();

        return parent::success("Ürünler Getirildi.",$products,200);
    }
}
