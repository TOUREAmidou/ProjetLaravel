<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model {

	protected $table = 'tache';
    public $timestamps = true;

    protected $fillable = ['id', 'UserId', 'name', 'Description'];



}
