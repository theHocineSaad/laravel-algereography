<?php

namespace TheHocineSaad\LaravelAlgereography\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'ar_name',
    ];

    public function dairas()
    {
        return $this->hasMany(Daira::class);
    }
}
