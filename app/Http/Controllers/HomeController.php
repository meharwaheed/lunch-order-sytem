<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['shops'] = Shop::all();


//        $data = file_Storage::disk('local')->get('/storage/images/products/2.jpg');
//        dd($data);
        return view('website.index')->with($data);
    }

    public function getShopProducts($id){
        $data['shop'] = Shop::where('id', $id)->with('products')->first();
        return view('website.shop_products')->with($data);
    }

    public function buy_product($id, $shop_id) {
        $data['product'] = Product::findOrFail($id);
        $data['shop'] = Shop::findOrFail($shop_id);
        return view('website.buy_product')->with($data);
    }
}
