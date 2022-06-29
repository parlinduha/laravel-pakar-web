<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'disease_id',
        'image',
        'title',
        'content',
    ];

    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //         ];
    // }

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
