<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ham goi view index
    public function index(){

        //lấy danh sách sp nb của nam va nu
        $menProducts = Product::where('featured', true)->where('product_category_id', 1)->get();
        $womenProducts = Product::where('featured', true)->where('product_category_id', 2)->get();

        // dd($menProducts);



        //truyeenf 2 biến sp vào view
        return view('front.index', compact('menProducts', 'womenProducts'));
    }
}
