<?php

namespace App\Http\Controllers;

use App\Http\Controllers\iController\iCategoriesManage;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller implements iCategoriesManage
{
    //

    public function getEdit($id_cg)
    {
        $categories = Category::find($id_cg);
        return view('category.edit_category',['categories' => $categories]);
    }

    public function postEdit(Request $request,$id_cg)
    {
        $categories = Category::find($id_cg);
        echo $request->txtEditName;

        $this->validate($request,
            [
                'txtEditName' => 'required|min:3|max:100'
            ],
            [
                'txtEditName.required' => 'Bạn chưa nhập tên chủ đề',
                'txtEditName.min' => 'Độ dài quá ngắn',
                'txtEditName.max' => 'Độ dài cần phải dưới 100 kí tự',
            ]);

        $categories->name = $request->txtEditName;
        $categories->unsigned_name = changeTitle($request->txtEditName);
        $categories->save();
        return redirect('admin/category/edit/'.$id_cg)->with('notification','Sửa thành công');
    }

    public function getAdd()
    {
        return view('category.add_category');
    }

    public function getList()
    {
        $categories = Category::paginate(5);
        return view('category.list_category', ['categories' => $categories]);
    }

    public function postAdd(Request $request)
    {
        echo changeTitle($request->txtName);
        $this->validate($request,
            [
                'txtName' => 'required|min:3|max:100'
            ],
            [
                'txtName.required' => 'Bạn chưa nhập tên chủ đề',
                'txtName.min' => 'Độ dài quá ngắn',
                'txtName.max' => 'Độ dài cần phải dưới 100 kí tự'
            ]);

        $categories = new Category();
        $categories->name = $request->txtName;
        $categories->unsigned_name = changeTitle($request->txtName);
        $categories->save();
        return redirect('admin/category/add')->with('notification','Thêm thành công');
    }

    public function Delete($id_cg){
        $categories = Category::find($id_cg);
        $categories->delete();

        return redirect('admin/category/list');
    }
}
