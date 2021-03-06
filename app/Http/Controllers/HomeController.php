<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Story;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index() {
        $productsCache = Cache::remember('home-cache-product', 10, function() {
            return Product::all()->sortDesc()->take(3);
        });

        $storiesCache = Cache::remember('home-cache-story', 10, function() {
            return Story::all()->sortDesc()->take(2);
        });

        return view('index', [
            'products' => $productsCache,
            'stories' => $storiesCache,
        ]);
    }
}
