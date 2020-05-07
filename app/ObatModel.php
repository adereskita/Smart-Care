<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObatModel extends Model
{
    protected $table = 'obats';

    protected $fillable = [
    'nama_obat',
    'user_id',
    'user_email'
    ];

    public function obat(){
        return $this->belongsTo('App\Patients');
    }
    // public function patients(){
    //     return $this->hasMany('App\Patients');
    // }
}
