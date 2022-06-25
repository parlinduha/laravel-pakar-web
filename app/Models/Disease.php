<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_disease',
        'name_disease',
        'description',
    ];

    // public function relation()
    // {
    //     return $this->belongsTo(Relation::class);
    // }
}
