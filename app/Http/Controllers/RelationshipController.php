<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class RelationshipController extends Controller 
{
    public function userLogin()
    {
        $users = User::with('latest_login')->get();
        $latestLogin = $users->first()->latest_login();
        if ($latestLogin->exists()) {
            $latestLoginAry = $latestLogin->get();
            foreach ($latestLoginAry as $login) {
                echo '使用者：' . $login->user_id . ' 最後建立時間：' . $login->created_at . '。' . PHP_EOL;
            }
        }
    }

    public function userState()
    {
        // User::with('current_state')->get();
        $activeUsers = User::whereHas('current_state', function ($q) {
            $q->where('state', 'active');
        })->get()->slice(0, 10);
        echo '啟用的使用者前十筆清單如下：' . PHP_EOL;
        foreach ($activeUsers as $user) {
            echo '使用者：' . $user->id . '。' . PHP_EOL;
        }
    }

    public function productPrice()
    {
        $products = Product::with('price')->get()->slice(0, 10);
        echo '有價格的產品前十筆清單如下：' . PHP_EOL;
        foreach ($products as $product) {
            echo '產品：' . $product->id . '。' . PHP_EOL;
        }
    }
}
