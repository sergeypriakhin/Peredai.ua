<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $fillable = [
        'user_id',
        'location_from',
        'location_where',
        'date_with',
        'date_to',
        'transport_id',
        'comments'
    ];
    protected $guarded = ['id', '_token'];

    public function transport()
    {
        return $this->belongsTo('App\Models\Transport');
    }
     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
