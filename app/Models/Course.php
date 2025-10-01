<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'slug',
        'total_rating',
        'price',
        'category_id',
        'mentor_id',
        'tag_id',
    ];

    // Jika nanti Anda butuh, Anda bisa definisikan relasinya di sini
    // public function category() { return $this->belongsTo(Category::class); }
    // public function mentor() { return $this->belongsTo(User::class, 'mentor_id'); }
    // public function tag() { return $this->belongsTo(Tag::class); }
}
