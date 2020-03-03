<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeNews extends Model
{
    //
    protected $table = 'typenews';
    public $primaryKey = 'id_tn';

    public function Category(){
        return $this->belongsTo('App\Category','id_cg','id_cg');
    }

}
