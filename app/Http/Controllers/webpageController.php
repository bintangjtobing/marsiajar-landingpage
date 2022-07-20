<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\subCategories;
use App\categories;
use App\blogFiles;
use App\blogImages;
use App\subCategoriesImages;
use App\categoriesImages;
use App\album_photos;
use App\albums;
use Illuminate\Support\Facades\DB;


class webpageController extends Controller
{
    public function index()
    {
        $sub = subCategories::with('image')->get();
        $article = blog::with('user', 'image', 'subcategories', 'categories')->orderBy('created_at', 'DESC')->limit(6)->get();
        return view('home.index', ['sub' => $sub, 'article' => $article]);
    }
    public function news()
    {
        $blogs = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image', 'categories', 'subcategories', 'file')->get();
        return view('home.blog-2', ['blogs' => $blogs]);
        // return response()->json($blogs);
    }
    public function events()
    {
        return view('home.events');
    }
    // public function gallery()
    // {
    //     return view('home.galleries');
    // }
    public function aboutUs()
    {
        return view('home.about');
    }
    public function contactUs()
    {
        return view('home.contact');
    }
    public function bahanAjar()
    {
        return view('home.bahan-ajar');
    }
    public function rencanaAjar()
    {
        return view('home.rencana-ajar');
    }
    public function lembarKerja()
    {
        return view('home.lembar-kerja');
    }
    public function inspirasi()
    {
        return view('home.inspirasi');
    }
    public function detailAjar()
    {
        return view('home.detail-ajar');
    }
    public function readArticle($slug)
    {
        $get = blog::where('slug', $slug)->with('user', 'image', 'subcategories', 'categories', 'file')->get();
        return response()->json($get);
    }
}
