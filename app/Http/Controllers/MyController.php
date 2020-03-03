<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use App\TypeNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MyController extends Controller
{

    /**
     * MyController constructor.
     */
    public function __construct()
    {
        $categories = Category::all();
        $typeNewses = TypeNews::all();
        $newses = News::all();
        
        View::share('categories',$categories);
        View::share('tyoeNewses',$typeNewses);
        View::share('newses',$newses);
    }

    public function Demo(){
        return view('pages.demo');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function singlePost(){
        return view('pages.single-post');
    }
    public function about(){
        return view('pages.about');
    }
    public function archiveBlog(){
        return view('pages.archive-blog');
    }
    public function typography(){
        return view('pages.typography');
    }

    public function demoView(){
        return view('demo');
    }
    public function signin(Request $request){
       $data = $request->all();
       print_r($data);
    }

}
