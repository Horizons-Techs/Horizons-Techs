<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    use HasFactory;

    protected $table = 'history';
    protected $primaryKey = ['user_id', 'article_id'];
    public $incrementing = false;


    protected $fillable = [
        'user_id',
        'article_id',
        'consultation_date',
    ];


    /**
     * Get the user that the histoy belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the article that the histoy belongs to.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}