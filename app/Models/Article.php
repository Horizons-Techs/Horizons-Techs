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
        'theme_id',
        'author_id',
        'status',
        'publication_date',
    ];
    
    protected $casts =[
            'publication_date' => 'datetime',
    ];


    /**
     * Get the author of the article.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the theme of the article.
     */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }


    /**
     * Get the rating of the article.
     */
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

    /**
     * Get the chats of the article.
     */
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
}
