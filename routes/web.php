<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Director\{
    DirectorController,
    UserController,
    ProductController,
    ShopWorkerController,
    ShopController,
};

use App\Http\Controllers\Manager\{
    ManagerController,
    MenuController,
    ChangeShopTimeController
};
use App\Http\Controllers\Stripe\StripePaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/menu/{shop_id}', [\App\Http\Controllers\HomeController::class, 'getShopProducts'])->name('shopProducts');

Route::get('/logout', function () {
    auth()->logout();
    return redirect(url('/'));
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'director']], function () {
    Route::get('/home',[DirectorController::class,'index'])->name('home');
    Route::get('/dashboard',[DirectorController::class,'index'])->name('dashboard');
    Route::get('user/delete/{id?}',[UserController::class,'destroy'])->name('delete_user');
    Route::get('shop/delete/{id?}',[ShopController::class,'destroy'])->name('delete_shop');
    Route::get('shopStaff/delete/{id?}',[ShopWorkerController::class,'destroy'])->name('delete_worker');
    Route::get('product/delete/{id?}',[ProductController::class,'destroy'])->name('delete_product');

//    Route::get('products_destroy/{destroy}',[ProductController::class, 'destroy'])->name('products_destroy');
//    Route::get('users_destroy/{destroy}',[UserController::class, 'destroy'])->name('users_destroy');
//    Route::get('shops_destroy/{destroy}',[ShopController::class, 'destroy'])->name('shops_destroy');
//    Route::get('shopStaff_destroy/{destroy}',[ShopWorkerController::class, 'destroy'])->name('shopStaff_destroy');
//    Route::get('depositPayments',[StripePaymentController::class, 'create'])->name('depositPayments');
    Route::resources([
        'products' => ProductController::class,
        'users' => UserController::class,
        'shops' => ShopController::class,
        'shopStaff' => ShopWorkerController::class,
    ]);


});

Route::group(['middleware' => ['auth', 'manager']], function () {
    Route::get('items', [ManagerController::class, 'getProducts'])->name('getProducts');
    Route::get('my-shop-orders', [ManagerController::class, 'my_shop_orders'])->name('my_shop_orders');
    Route::get('addToMenu/{addToMenu}', [ManagerController::class, 'addToMenu'])->name('addToMenu');
    Route::get('menu_management', [ManagerController::class, 'getMenuProducts'])->name('menumanagement');
    Route::get('removeFromMenu/{removeFromMenu}', [ManagerController::class, 'removeFromMenu'])->name('removeFromMenu');
    Route::get('menuPage', [\App\Http\Controllers\Manager\MenuController::class, 'index'])->name('getMenu');
    Route::resources([
        'shoptime' => \App\Http\Controllers\Manager\ChangeShopTimeController::class
    ]);
    Route::get('order/history', [ManagerController::class, 'order_history'])->name('orderHistory');
});
Route::get('/account', function (){
    return view('user.account');
});

Route::group(['middleware' => 'auth'], function (){
    Route::post('stripePost',[StripePaymentController::class, 'stripePost'])->name('stripePost');
    Route::get('/checkout', function () {
        return view('website.checkout');
    });
    Route::post('/orderNow', [\App\Http\Controllers\User\CheckoutController::class, 'checkout'])->name('orderNow');

    Route::get('/setting', [\App\Http\Controllers\User\MainController::class, 'setting'])->name('setting');
    Route::post('/updateSetting', [\App\Http\Controllers\User\MainController::class, 'updateSetting'])->name('updateSetting');
    Route::get('/my-orders', [\App\Http\Controllers\User\MainController::class, 'my_orders'])->name('my_orders');
    Route::get('/account', function (){
        return view('user.account');
    });
});

Route::get('/buy-product/{id}/{shop_id}', [\App\Http\Controllers\HomeController::class, 'buy_product'])->name('buy_product')->middleware('auth');
