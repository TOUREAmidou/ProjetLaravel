<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ListTache extends Model {

    protected $table = 'ListTache';
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'UserId', 'ListId' ,'DateEcheance','Accomplie'];



}
