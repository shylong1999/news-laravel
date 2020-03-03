<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
//    use SoftDeletes;
    protected $table = 'news';
    public $primaryKey = 'id_news';

    protected $fillable = ['id_news','content','unsigned_content','summary','description','view_number','image','id_tn'];

}
