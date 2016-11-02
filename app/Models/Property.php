<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use Searchable;    

    protected $table = 'business_properties_mst';

    protected $primaryKey = 'property_id';

	public $timestamps = true;

    protected $fillable = [
        'address_lines',
        'post_town',
        'post_code',
        'uprn',
        'x_coord',
        'y_coord',
        'lat_val',
        'long_val',
        'telephone',
    ];

    protected $guarded = [];
}
