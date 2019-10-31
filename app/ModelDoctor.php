<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelDoctor extends Model
{
    // use SoftDeletes;

	protected $table = 'doctors';
	// protected $primarykey = 'id';

    protected $fillable = [
    'name',
    'docId',
    'phone',
    'email',
    'password',
    ];
}
