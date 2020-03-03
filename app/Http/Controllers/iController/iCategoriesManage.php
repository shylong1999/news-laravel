<?php
/**
 * Created by PhpStorm.
 * User: longung
 * Date: 03/03/2020
 * Time: 14:20
 */

namespace App\Http\Controllers\iController;


use Illuminate\Http\Request;

interface iCategoriesManage
{

    public function getEdit($id_cg);

    public function postEdit(Request $request,$id_cg);

    public function getAdd();

    public function getList();

    public function postAdd(Request $request);

    public function Delete($id_cg);

}