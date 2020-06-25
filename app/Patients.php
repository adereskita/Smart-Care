<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Patients extends Model
{
    use Sortable;

    protected $table = 'patients';
    protected $fillable = [
        'id_nik',
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

        public $sortable = ['id', 'name', 'date', 'gender', 'doctor_name'];

        public function doctors(){
            return $this->belongsTo('App\ModelDoctor');
        }

        public function obatPasien(){
            return $this->hasMany('App\ObatModel');
        }
}
