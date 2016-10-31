<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class LocalAuthority extends Model
{
    use Searchable;    

    protected $table = 'business_local_authorities_mst';

    protected $primaryKey = 'la_id';

	public $timestamps = true;

    protected $fillable = [
        'la_name',
        'cag_code',
        'address_lines',
        'post_town',
        'post_code',
        'uprn',
        'x_coord',
        'y_coord',
        'lat_val',
        'long_val',
        'telephone',
        'email_address',
        'website'
    ];

    protected $guarded = [];
}
