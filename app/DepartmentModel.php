<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentModel extends Model
{
    protected $table = 'departments';
	// protected $primarykey = 'id';

    protected $fillable = [
    'department_name',
    'phone',
    ];

    public function doctorDept(){
        return $this->belongsTo('App\ModelDoctor');
    }
    public function patients(){
        return $this->hasMany('App\Patients');
    }
}
