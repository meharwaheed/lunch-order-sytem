<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shop;
use App\Models\ShopProduct;
use App\Models\ShopWorker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
  public function index() {
      $shopWorker = ShopWorker::where('user_id', Auth::user()->id)->first();
      if(!$shopWorker) {
          return redirect(url('/'))->with(['message' => 'You are not linked on any shop. Please ask Director to assign you a shop']);
      }
      $data['shop'] = Shop::where('id', $shopWorker->shop_id)->with('products')->first();
      return view('manager.menuManagement.menu')->with($data);
  }

  public function productDetail($id){
    $product = Product::findOrFail($id);
    return view('website.productDetail', compact('product'));
  }
}
