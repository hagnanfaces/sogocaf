<?php

namespace App\Http\Controllers;

use Backpack\NewsCRUD\app\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.category');
    }

    public function show(string $category)
    {
//        $category = Category::query()
//            ->where('slug',$category)
////            ->with('children')
//            ->get();
//        dd($category);
//        dd(collect(trans('page.home.product.products'))->firstWhere('slug','Tôles noires'));
        $category = collect(trans('page.home.product.products'))->firstWhere('slug',$category);
        return view('pages.category.show',compact('category'));
    }

    public function product(string $category, string $product)
    {
        return view('pages.category.show',compact('product'));
    }
}
