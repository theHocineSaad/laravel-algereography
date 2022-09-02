<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        
        //'id',Ids auto increment you never need to insert them
        'name',
        'ar_name',
        'wilaya_id',
    ];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }
}
