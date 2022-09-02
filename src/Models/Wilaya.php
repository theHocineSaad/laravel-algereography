<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        // 'id', you never need to insert an Id to a table (auto-increment)
        'name',
        'ar_name',
    ];

    public function dairas()
    {
        return $this->hasMany(Daira::class);
    }
}
