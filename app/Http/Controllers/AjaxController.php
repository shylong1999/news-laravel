<?php

namespace App\Http\Controllers;

use App\TypeNews;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //

    public function getTypeNews($id_cg){
        $typeNewses = TypeNews::where('id_cg',$id_cg)->get();

        foreach ($typeNewses as $typeNews){
            echo "<option value='$typeNews->id_tn' name='txtTypeNews'>{$typeNews->name}</option>";
        }
    }
}
