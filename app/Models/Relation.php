<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptom_id',
        'disease_id'
    ];

    public function symptom()
    {
        return $this->belongsTo(Symptom::class);
    }
    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
