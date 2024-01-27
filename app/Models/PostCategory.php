<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'user_id',
        'title',
        'description',
        'seo_title',
        'seo_keywords',
        'seo_description',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function posts() {
        return $this->hasMany('App\Models\Post');
    }

}
