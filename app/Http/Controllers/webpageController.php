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
use App\comments;


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
        $blogs = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image', 'categories', 'subcategories', 'file')->orderBy('views', 'DESC')->paginate(6);
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
    public function eduCategories($slug)
    {
        $categories = categories::where('slug', $slug)->first();
        $blog = blog::with('user', 'image', 'subcategories', 'categories', 'image')->orderBy('created_at', 'DESC')->where('category', $categories->id)->get();
        $subcategories = subCategories::all();
        return view('home.bahan-ajar', ['categories' => $categories, 'blog' => $blog, 'subcategories' => $subcategories]);
        // return response()->json($blog);
    }
    public function detailAjar()
    {
        return view('home.detail-ajar');
    }
    public function readArticle($slug)
    {
        $blogView = blog::where('slug', $slug)->with('user', 'image', 'file', 'comments')->first();
        $blogView->views += 1;
        $blogView->save();

        $article = blog::where('slug', $slug)->with('user', 'image', 'subcategories', 'categories', 'file', 'comments')->first();
        $sub = subCategories::with('image')->get();
        // return response()->json($blogView);
        return view('home.read-article', ['blogView' => $blogView, 'article' => $article, 'sub' => $sub]);
    }
    public function getArticleByTag($slug)
    {
        $sub = subCategories::where('slug', $slug)->first();
        $cat = categories::all();
        $blog = blog::with('user', 'image', 'subcategories', 'categories', 'image')->orderBy('created_at', 'DESC')->where('subcategory', $sub->id)->get();
        // return response()->json($blog);
        return view('home.tag', ['blog' => $blog, 'sub' => $sub, 'cat' => $cat]);
    }
    public function postComments(Request $request, $slug)
    {
        $blog = blog::where('slug', $slug)->first();
        $comments = new comments();
        $comments->user_id = $request->user_id;
        $comments->name = $request->name;
        $comments->email = $request->email;
        $comments->post_id = $blog->id;
        $comments->parent_id = $request->parent_id;
        $comments->body = $request->body;
        $comments->save();
        return back()->with('success', 'You successfully give a comment to this article');
    }
}
