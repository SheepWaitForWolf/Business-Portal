<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
   	use Searchable;
    
    protected $table = 'portal_child_mst';

    protected $primaryKey = 'child_id';

    public $timestamps = true;

    protected $fillable = [
    	'seemis_id',
    	'f_name',
    	'l_name',
    	'dob',
    	'gender',
    	'school_id',
    	'class_level'
    ];

    protected $guarded = [];
}
