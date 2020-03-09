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


    public function index()
    {
        $categories = Category::all();

        return view('category.list_category', compact('categories'));
    }

    //search data
    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
            $categories = Category::where('name', 'LIKE', '%' . $request->search . '%')->get();
            $Num = 1;
            if ($categories) {
                foreach ($categories as $key => $category) {
                    $output .= '<tr class="odd gradeX" align="center">
                    <td>' . $Num . '</td>
                    <td>' . $category->name . '</td>
                    <td>' . $category->unsigned_name . '</td>
                   <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="admin/category/delete/'.$category->id_cg.'"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="admin/category/edit/'.$category->id_cg.'">Edit</a></td>
                    </tr>';

                    $Num++;
                }
            }

            return Response($output);
        }
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
