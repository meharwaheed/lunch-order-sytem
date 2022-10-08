<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProducts;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $user = auth()->user();
        if($request->qty > 0) {
            $product = Product::findOrFail($request->product_id);
            $total = $request->qty * $product->price;
            $discount = 0;
            if($user->role == 'user') {
                $discount = round($total * 10 /100);
                $total = $total - $discount;
            }
            if($user->balance >= $total) {
                $key = random_int(0, 999999);
                $key = str_pad($key, 6, 0, STR_PAD_LEFT);
                $data['ref_id'] = '#'.$key;
                $data['discount'] = $discount;
                $data['price'] = $total;
                $data['quantity'] = $request->qty;
                $data['product_id'] = $product->id;
                $data['shop_id'] = $request->shop_id;
                $data['user_id'] = $user->id;
                Order::create($data);
                $user->decrement('balance', $total);
                return redirect(url('my-orders'))->with('success', "Order placed successfully!");
            } else {
                return redirect()->back()->with('error', "You don't have enough balance to proceed this order");
            }
        } else {
            return redirect()->back()->with('error', "Please enter a valid quantity");
        }
    }


}
