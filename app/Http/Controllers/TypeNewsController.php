<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\TypeNews;
use Illuminate\Support\Str;

class TypeNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $typeNewses = TypeNews::all();
        $typeNewses = TypeNews::join('category', 'typenews.id_cg', '=', 'category.id_cg')
            ->select('typenews.*','category.name as category')
            ->simplePaginate(5);

        return view('typenews.list_typenews', ['typeNewses' => $typeNewses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view
        $categories = Category::all();

        return view('typenews.add_typenews',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $this->validate($request,
            [
                'txtName' => 'required|min:3|max:100'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên chủ đề',
                'txtName.min' => 'Độ dài quá ngắn',
                'txtName.max' => 'Độ dài cần phải dưới 100 kí tự'
            ]);

        $typeNewses = new TypeNews();
        $typeNewses->name = $data['txtName'];
        $typeNewses->unsigned_name = Str::slug($data['txtName']);
        $typeNewses->id_cg = $data['id_category'];
        $typeNewses->save();
        return redirect('admin/typenews/add')->with('notification','Thêm thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return TypeNews::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find($id)
        //return view
        $typeNews = TypeNews::find($id);
//        $typeNews = TypeNews::join('category', 'typenews.id_cg', '=', 'category.id_cg')
//            ->select('typenews.*','category.name as category')
//            ->where('typenews.id_tn',$id)
//            ->first();
//        dd($typeNews);
        $categories = Category::all();
        return view('typenews.edit_typenews',['typeNews' => $typeNews],['categories'=> $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $typeNews = TypeNews::findOrFail($id);

        $data = $request->all();

//        dd($data);
        $typeNews->name = $data['txtName'];
        $typeNews->id_cg = $data['id_category'];
        $typeNews->unsigned_name = Str::slug($data['txtName']);
        $typeNews->save();
        return redirect('admin/typenews/edit/'.$id)->with('notification','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $typeNews = TypeNews::findOrFail($id);
        $typeNews->delete();

        return redirect('admin/typenews/list');
    }
}
