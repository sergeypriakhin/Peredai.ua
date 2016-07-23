<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    // protected $table = 'delivery';

    protected $fillable = [
        'user_id',
        'location_from',
        'location_where',
        'date_with',
        'date_to',
        'title',
        'typepackage_id',
        'price',
        'currency_id',
        'comments'
    ];
    protected $guarded = ['id', '_token'];

    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }

    public function typepackage()
    {
        return $this->belongsTo('App\Models\Typepackage');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
