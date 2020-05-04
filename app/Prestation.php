<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{

    protected $table = 'prestations';
    protected $fillable = ['name','description','url', 'id_auteur'];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
