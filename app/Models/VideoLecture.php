<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoLecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_lecture_category_id',
        'title',
        'slug',
        'video',
        'description',
        'seo_title',
        'seo_keywords',
        'seo_description',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function category()
    {
        return $this->belongsTo('App\Models\VideoLectureCategory', 'video_lecture_category_id');
    }

}
