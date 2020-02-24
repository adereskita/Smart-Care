<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'address',
        'history_of_disease',
        'department_name',
        'sistol',
        'diastol'];

        public function doctors(){
            return $this->belongsTo('App\ModelDoctor');
        }
}
