<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\blogImages;
use App\album_photos;
use App\albums;
use Illuminate\Support\Facades\DB;


class webpageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function news()
    {
        $blog = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image')->paginate(9);
        return view('home.blog-2', ['blogs' => $blog]);
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
}
