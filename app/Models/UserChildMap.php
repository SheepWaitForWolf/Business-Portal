<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChildMap extends Model
{
    protected $table = 'portal_user_child_mpg';

    protected $primaryKey = 'user_child_mpg_id';

    public $timestamps = true;

    protected $fillable = [
    	'user_id',
    	'child_id',
    	'relationship_type'
    ];

    protected $guarded = [];
}
