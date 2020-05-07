<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'place_of_birth',
        'date',
        'gender',
        'address',
        'deskripsi',
        'history_of_disease',
        'doctor_name',
        'sistol',
        'diastol'];

        public function doctors(){
            return $this->belongsTo('App\ModelDoctor');
        }

        public function obatPasien(){
            return $this->hasMany('App\ObatModel');
        }
}
