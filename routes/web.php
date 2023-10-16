<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CouponUsedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\TransactionController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/filter', [HomeController::class, 'filter'])->name('filter');

Route::get('/try', function () {
    return view('try2')->with('title', 'try2');
});

Route::prefix('shop')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::get('/product', [ShopController::class, 'product'])->name('shop.product');
    Route::get('/product/{slug}', [ShopController::class, 'getproduct'])->name('shop.getproduct');
    Route::get('/category/{slug}', [ShopController::class, 'category'])->name('shop.category');
    Route::get('/tag/{slug}', [ShopController::class, 'tag'])->name('shop.tag');

    Route::get('/store/{slug}', [StoreController::class, 'show'])->name('store.show');
    
    Route::prefix('profile')->middleware('auth')->group(function () {
        Route::get('/', [ShopController::class, 'profile'])->name('shop.profile');
        Route::put('/{id}', [ShopController::class, 'updateProfile'])->name('shop.updateProfile');
    });
    
    Route::prefix('cart')->middleware('auth')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('cart');
        Route::post('/{slug}', [CartController::class, 'store'])->name('cart.add');
        Route::put('/{id}/up', [CartController::class, 'update'])->name('cart.update');
        Route::put('/{id}/down', [CartController::class, 'updateDown'])->name('cart.updatedown');
        Route::post('/wishlist/{slug}', [CartController::class, 'storeOne'])->name('cart.addone');
        Route::post('/wish/all', [CartController::class, 'storeAll'])->name('cart.addall');
        Route::delete('/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    });
    
    Route::prefix('coupon-use')->middleware('auth')->group(function () {
        Route::post('/', [CouponUsedController::class, 'store'])->name('couponused.add');
    });
    
    Route::prefix('transaction')->middleware('auth')->group(function () {
        Route::post('/', [TransactionController::class, 'store'])->name('transaction.add');
        Route::get('/detail', [ShopController::class, 'transaction'])->name('shop.transaction');
        Route::get('/detail/{id}', [ShopController::class, 'order'])->name('shop.transactiondetail');
        Route::get('/cancel/{id}', [TransactionController::class, 'cancel'])->name('shop.transactioncancel');
    });
    
    Route::prefix('wishlist')->middleware('auth')->group(function () {
        Route::get('/', [WishlistController::class, 'index'])->name('wishlist');
        Route::post('/{slug}', [WishlistController::class, 'store'])->name('wishlist.add');
        Route::delete('/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');
    });
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::prefix('register')->group(function () {
        Route::get('/', [AuthController::class, 'index'])->name('register');
        Route::post('/', [AuthController::class, 'register'])->name('register.post');
    });
    Route::prefix('login')->group(function () {
        Route::get('/', [AuthController::class, 'logindex'])->name('login');
        Route::post('/', [AuthController::class, 'login'])->name('login.post');
    });
});

Route::middleware(['auth', 'level:1,3'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/report', [DashboardController::class, 'report'])->name('report');

        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('category');
            Route::get('/data', [CategoryController::class, 'data'])->name('category.data');
            Route::post('/', [CategoryController::class, 'store'])->name('category.add');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
            Route::put('/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
        });

        Route::prefix('tag')->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('tag');
            Route::get('/data', [TagController::class, 'data'])->name('tag.data');
            Route::post('/', [TagController::class, 'store'])->name('tag.add');
            Route::get('/edit/{id}', [TagController::class, 'edit'])->name('tag.edit');
            Route::get('/delete/{id}', [TagController::class, 'delete'])->name('tag.delete');
            Route::put('/edit/{id}', [TagController::class, 'update'])->name('tag.update');
            Route::delete('/delete/{id}', [TagController::class, 'destroy'])->name('tag.destroy');
        });

        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('product');
            Route::get('/data', [ProductController::class, 'data'])->name('product.data');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
            Route::post('/create', [ProductController::class, 'store'])->name('product.add');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
            Route::put('/edit/{id}', [ProductController::class, 'update'])->name('product.update');
            Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
            Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
        });

        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('/data', [UserController::class, 'data'])->name('user.data');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/create', [UserController::class, 'store'])->name('user.add');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/edit/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        });

        Route::prefix('coupon')->group(function () {
            Route::get('/', [CouponController::class, 'index'])->name('coupon');
            Route::get('/data', [CouponController::class, 'data'])->name('coupon.data');
            Route::post('/', [CouponController::class, 'store'])->name('coupon.add');
            Route::get('/edit/{id}', [CouponController::class, 'edit'])->name('coupon.edit');
            Route::put('/edit/{id}', [CouponController::class, 'update'])->name('coupon.update');
            Route::get('/delete/{id}', [CouponController::class, 'delete'])->name('coupon.delete');
            Route::delete('/delete/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');
        });

        Route::prefix('transaction')->group(function () {
            Route::get('/', [TransactionController::class, 'index'])->name('transaction');
            Route::get('/data', [TransactionController::class, 'data'])->name('transaction.data');
            Route::get('/detail/{id}', [TransactionController::class, 'show'])->name('transaction.show');
            Route::get('/cancel/{id}', [TransactionController::class, 'delete'])->name('transaction.cancel');
            Route::put('/status/{id}', [TransactionController::class, 'update'])->name('transaction.status');
        });
    });
});
