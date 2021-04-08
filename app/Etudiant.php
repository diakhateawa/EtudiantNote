<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = array('matricule','nomE', 'prenomE','telephone');
    public static $rules = array('matricule'=>'required|min:2', 
                                 'nomE'=>'required|min:2',
                                 'prenomE'=>'required|min:3',
                                 'telephone'=>'required|min:9'
                                );

    public function note()
    {
        return $this->hasMany('App\Note');
    }
}
