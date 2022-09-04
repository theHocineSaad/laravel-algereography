<?php

namespace TheHocineSaad\LaravelAlgereography\Models;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'ar_name',
        'wilaya_id',
    ];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }
}
