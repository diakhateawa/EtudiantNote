<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = array('etudiants_id', 'users_id','valeur', 'matiere');
    public static $rules = array('etudiants_id'=>'required|integer',
                                 'users_id'=>'required|bigInteger',
                                 'valeurlibelle'=>'required|min:20', 
                                 'matiere'=>'required|min:3',
                                );

    public function note()
    {
        return $this->belongsTo('App\Etudiant');
    }
}
