<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'tag_id',
        'mentor_id',
    ];

    public function mentor()
    {
        // Parameter kedua ('mentor_id') adalah foreign key di tabel 'articles'
        return $this->belongsTo(User::class, 'mentor_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
