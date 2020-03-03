<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'id_cg';
    public $timestamps = false;
    protected $table = 'category';
    public $fillable = ['id_cg','name','unsigned_name','created_at','update_at'];

    public function typeNews()
    {
        return $this->hasMany('App\TypeNews', 'id_cg', 'id_cg');
    }
}