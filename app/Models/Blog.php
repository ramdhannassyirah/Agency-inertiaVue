<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $filable = [
        'author_id',
        'title',
        'content',
        'image',
        'slug',

    ];

    public function Author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
