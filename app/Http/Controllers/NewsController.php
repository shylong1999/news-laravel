<?php

namespace App\Http\Controllers;

use App\Category;
use App\TypeNews;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    //

    public function index(){

        $newses = News::join('typenews', 'typenews.id_tn', '=', 'news.id_tn')
            ->join('category', 'typenews.id_cg', '=', 'category.id_cg')
            ->select('news.*','typenews.name as type_news','category.name as category')
            ->paginate(5);
        return view('news.list_news', ['newses' => $newses]);
    }

    public function show($id_news){
        return News::find($id_news);
    }

    public function create(){
        $categories = Category::all();
        $typeNewses = TypeNews::all();

        return view('news.add_news',['categories' => $categories], ['typeNewses' => $typeNewses]);
    }

    public function store(Request $request){

        $data = $request->all();
        $news = new News();
        $news->content = $data['txtName'];
        $news->unsigned_content = Str::slug($data['txtName']);
        $news->id_tn = $data['id_type_news'];
        $news->summary = $data['summary'];
        $news->description = $data['description'];
        $news->view_number = 0;
        $news->image = "";
        $news->save();
        return redirect('admin/news/add')->with('notification',"Them thanh cong");

    }


    public function edit($id_news)
    {
        //find($id)
        //return view
//        $news = News::find($id_news);
        $news = News::join('typenews', 'typenews.id_tn', '=', 'news.id_tn')
            ->join('category', 'typenews.id_cg', '=', 'category.id_cg')
            ->select('news.*','typenews.name as type_news','category.id_cg as id_cg')
            ->where('news.id_news',$id_news)
            ->first();
//        dd($news);
//        dd($news);
//        $typeNews = TypeNews::join('category', 'typenews.id_cg', '=', 'category.id_cg')
//            ->select('typenews.*','category.name as category')
//            ->where('typenews.id_tn',$id)
//            ->first();
//        dd($typeNews);
        $typeNewses = TypeNews::all();
        $categories = Category::all();
        return view('news.edit_news',['news'=> $news,
                                            'typeNewses' => $typeNewses,
                                            'categories' => $categories]);
    }

    public function update(Request $request, $id_news){
        $news = News::findorFail($id_news);


        $data = $request->all();
//        dd($data);
        $news->content = $data['txtName'];
        $news->unsigned_content = Str::slug($data['txtName']);
        $news->id_tn = $data['id_type_news'];
        $news->summary = $data['summary'];
        $news->description = $data['description'];
        $news->view_number = 0;
        $news->image = "";
        $news->save();

        return redirect('admin/news/edit/'.$id_news)->with('notification',"sua thanh cong");
    }

    public function destroy($id_news){
        $news = News::findOrFail($id_news);
        $news->delete();

        return redirect('admin/news/list');
    }
}
