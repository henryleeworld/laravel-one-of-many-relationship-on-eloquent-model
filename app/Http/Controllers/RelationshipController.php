<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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
                echo __('User :user_id\'s latest creation date is :created_at.', ['user_id' => $login->user_id, 'created_at' => $login->created_at]) . PHP_EOL;
            }
        }
    }

    public function userState()
    {
        // User::with('current_state')->get();
        $activeUsers = User::whereHas('current_state', function ($q) {
            $q->where('state', 'active');
        })->get()->slice(0, 10);
        echo __('The top ten lists of activated users are as follows: ') . PHP_EOL;
        foreach ($activeUsers as $user) {
            echo __('User: ') . $user->id . __('.') . PHP_EOL;
        }
    }

    public function productPrice()
    {
        $products = Product::with('price')->get()->slice(0, 10);
        echo __('The top ten lists of products with prices are as follows: ') . PHP_EOL;
        foreach ($products as $product) {
            echo __('Product: ') . $product->id . __('.') . PHP_EOL;
        }
    }
}
