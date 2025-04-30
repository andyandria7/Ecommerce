<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MidCategory;
use App\Models\Product;
use App\Models\Product_photo;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $categories = Category::with('mid_category.endCategory')->get();
        return view('welcome', compact('products','category','categories'));
    }

    public function about()
    {
        $category = Category::all();

        return view('components.about', 
        [
            'category' => $category
        ]);
    }
    public function faq()
    {
        $category = Category::all();
        return view('components.fap', 
        [
            'category' => $category
        ]);
    }
    public function contact()
    {
        $category = Category::all();

        return view('components.contact', 
        [
            'category' => $category
        ]);
    }

    public function login()
    {
        $category = Category::all();
        return view('components.login', [
            'category' => $category
        ]);
    }
    public function register()
    {
        $category = Category::all();
        return view('components.register', 
    [
        'category' => $category
    ]
    );
    }
    public function cart()
    {
        $category = Category::all();

        return view('components.cart', 
        [
            'category' => $category
        ]);
    }
    public function dashboard()
    {
        $category = Category::all();

        return view('components.dashboard', compact('category'));
    }
    public function product($p_id) {
        $product = Product::where('p_id', $p_id)->first();
        $photo = Product::with('product_photo')->where('p_id', $p_id)->first();
        $category = Category::all();

        if (!$product) {
            return redirect()->back()->withErrors('Produit non trouvé.');
        }
    
        return view('components.produit', compact('product','photo','category'));
    }

    public function category(){

    }
}
