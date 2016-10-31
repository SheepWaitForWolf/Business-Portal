<?php

namespace App\Models;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use Searchable;

    protected $table = 'portal_trn_child_absence';

    protected $primaryKey = 'absence_id';

    public $timestamps = true;

    protected $fillable = [
    	'f_name',
    	'l_name',
    	'la',
    	'school',
    	'doa',
    	'reason_for_absence'
    ];

    protected $guarded = [];
}
