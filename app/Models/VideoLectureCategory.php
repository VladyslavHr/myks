<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VideoLecture;

class VideoLectureCategory extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'slug',
        'description',
        'main_img',
        'seo_title',
        'seo_keywords',
        'seo_description',

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];



    public function videos()
    {
        // return $this->hasMany('App\Models\VideoLecture');
        return $this->hasMany(VideoLecture::class);
    }
}
