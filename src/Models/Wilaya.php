<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'arName',
    ];

    public function dairas()
    {
        return $this->hasMany(Daira::class);
    }
}
