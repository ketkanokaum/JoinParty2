<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'party_id',
        'review',
        'rating',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function party(){
        return $this->belongsTo(Party::class);
    }
}

