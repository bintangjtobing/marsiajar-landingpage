<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\subCategories;
use App\categories;
use App\blogFiles;
use App\blogEarnings;
use App\blogImages;
use App\subCategoriesImages;
use App\categoriesImages;
use App\album_photos;
use App\albums;
use Illuminate\Support\Facades\DB;
use App\comments;
use App\event_images;
use App\event_participants;
use App\events;
use App\Mail\addUser;
use App\User;
use App\userLogs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stringable;
use Illuminate\Support\Str;

class webpageController extends Controller
{
    public function checkUserExist(Request $request)
    {
        $getEmail = $request->email;
        $checkUser = User::where('email', $getEmail)->count();
        if ($checkUser != 0) {
            return back()->with('successCheckUser','Thank you for being our member :)');
        } else {
            return back()->with('failedCheckUser', 'Thank you for being our member :)');
        }
    }
    public function register()
    {
        return view('home.register');
    }
    public function postRegister(Request $request)
    {
        $getUser = User::where('email', $request->email)->orWhere('name', $request->name)->first();
        if (!$getUser) {
            // User not found
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = strtolower($request->name);
            $user->role = 'user';
            $user->department = 'teacher';
            $user->status = '1';
            $user->divisi = 'marsiajar';
            $user->gender = $request->gender;
            $user->organisation = 'Marsiajar';
            $user->phone = $request->phone;
            if ($user->gender == 'M') {
                $arr = array(
                    1, 3, 5
                );
                shuffle($arr);
                $randVal = $arr[0];
                $user->avatar = 'https://res.cloudinary.com/boxity-id/image/upload/v1640834537/assets/site%20needs/' . $randVal . '.jpg';
                $user->cover = 'https://res.cloudinary.com/boxity-id/image/upload/v1655096064/assets/site%20needs/cover/' . $randVal . '.jpg';
            } else {
                $arr = array(
                    2, 4, 6
                );
                shuffle($arr);
                $randVal = $arr[0];
                $user->avatar = 'https://res.cloudinary.com/boxity-id/image/upload/v1640834537/assets/site%20needs/' . $randVal . '.jpg';
                $user->cover = 'https://res.cloudinary.com/boxity-id/image/upload/v1655096064/assets/site%20needs/cover/' . $randVal . '.jpg';
            }
            $generatePassword = Str::random(15);
            $user->password = Hash::make($generatePassword);
            $user->unpassword = $generatePassword;
            $user->logip = $request->ip();
            $user->lastLogin = '0';

            // Save to logs
            $saveLogs = new userLogs();
            $saveLogs->userId = Auth::id() ?? 1;
            $saveLogs->ipAddress = $request->ip();
            $saveLogs->notes = 'Register new user ' . $user->username . ' by landingpage.';
            $saveLogs->save();

            $user->save();
            Mail::to($user->email)->send(new addUser($user));
            return back()->with('success', 'You have successfully register your new account');
        }
        if ($getUser) {
            return back()->with('userExist', 'You cannot register with the same email or username or name ' . $request->name . '. Please login with that email ' . $request->email . '. And if you forgot the password, you should contact admin.');
        }
    }
    public function index()
    {
        $sub = subCategories::with('image')->where('slug', '!=', 'artikel')->get();
        $article = blog::with('image', 'subcategories', 'categories', 'comments')->where([
            ['status', 1],
            ['subcategory', '!=', 5],
            ['category', '!=', 3],
        ])->orderBy('created_at', 'DESC')->limit(6)->get();
        // $article = blog::where('status', '1')->orderBy('created_at', 'DESC')->limit(6)->get();

        $creator = User::withCount('blog')->orderBy('blog_count', 'DESC')->limit(4)->get();
        // return response()->json($article);
        return view('home.index', ['sub' => $sub, 'article' => $article, 'creator' => $creator]);
    }
    public function news()
    {
        $blogs = blog::orderBy('created_at', 'desc')->where('status', 1)->with('user', 'image', 'categories', 'subcategories', 'file')->where('category', 3)->orderBy('views', 'DESC')->paginate(6);
        return view('home.blog-2', ['blogs' => $blogs]);
        // return response()->json($blogs);
    }
    public function events()
    {
        $events = events::with('image')->orderBy('created_at', 'DESC')->limit(6)->get();
        $eventgal = event_images::all();
        return view('home.events', ['events' => $events, 'eventgal' => $eventgal]);
        // return response()->json($eventgal);
    }
    public function getEvents(Request $req, $slug)
    {
        $events = events::where('slug', $slug)->with('user', 'image')->first();
        return view('home.eventsDetail', ['events' => $events]);
        // return response()->json($events);
        // dd($job);
    }
    public function getEventsApply($slug)
    {
        $events =
            events::where('slug', $slug)->with('user', 'image')->first();
        return view('home.eventsRegistration', ['events' => $events]);
        // dd($job);
    }
    public function postEventsApply($slug, Request $request)
    {
        $get =
            events::where('slug', $slug)->first();
        $events = new event_participants();
        $events->event_id = $get->id ?? '-';
        $events->name = $request->name;
        $events->email = $request->email;
        $events->nohp = $request->nohp;
        $events->type = $request->type;
        $events->refrences = $request->refrences;
        $events->sector = $request->sector;
        $events->description = $request->description;

        $events->save();
        return redirect()->back()->with('success', 'Congratulations!');
        // dd($request->all());
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
        $blog = blog::with('user', 'image', 'subcategories', 'categories', 'image', 'comments')->orderBy('created_at', 'DESC')->where('category', $categories->id)->get();
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
        $blogView = blog::where('slug', $slug)->with('user', 'image', 'file', 'comments', 'categories', 'subcategories')->first();
        $blogView->views += 1;
        $blogView->save();

        // create earnings
        $earning = blogEarnings::where('blogid', $blogView->id)->with('blog')->first();
        if (!$earning) {
            $blogEarn = new blogEarnings();
            $blogEarn->earning = 0;
            $blogEarn->userid = $blogView->userid;
            $blogEarn->blogid = $blogView->id;
            $blogEarn->note = 'start';
            $blogEarn->save();
        }
        // Get earnings
        $n = $blogView->views;
        $limit = 100;
        $total = 0;
        for (
            $n;
            $n >= $limit;
            $n -= $limit
        ) {
            $total += 1;
        }
        // $earning->earning = $total;
        // $earning->note = 'Tambah pendapatan sebanyak ' . $earning->earning;
        // $earning->save();
        $file = DB::table('blog_earnings')
            ->where('blogid', $blogView->id)
            ->update(array(
                'earning' => $total,
                'note' => 'Tambah pendapatan sebanyak ' . $total,
            ));

        $article = blog::where('slug', $slug)->with('user', 'image', 'subcategories', 'categories', 'file', 'comments')->first();
        $sub = subCategories::with('image')->get();
        // return response()->json($blogView);
        return view('home.read-article', ['blogView' => $blogView, 'article' => $article, 'sub' => $sub]);
        // return response()->json($article);
    }
    public function getArticleByTag($slug)
    {
        $sub = subCategories::where('slug', $slug)->first();
        // $cat = categories::all();
        $cat = subCategories::all();
        $blog = blog::with('user', 'image', 'subcategories', 'categories', 'image', 'comments')->orderBy('created_at', 'DESC')->where('subcategory', $sub->id)->get();
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
