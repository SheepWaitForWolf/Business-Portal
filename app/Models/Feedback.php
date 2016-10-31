<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use Searchable;

    protected $table = 'portal_feedback_mst';

    protected $primaryKey = 'feedback_id';

	public $timestamps = true;

    protected $fillable = [
        'feedback_id',
        'f_name',
        'l_name',
        'service',
        'message'
        
    ];

    protected $guarded = [];
}
