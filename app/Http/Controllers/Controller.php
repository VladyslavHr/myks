<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\{VideoLecture,Post};
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sitemap()
    {
        $content = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Adding dynamic video lectures
        $videos = VideoLecture::get(['slug', 'updated_at']);
        foreach ($videos as $video){
            $content .= '<url>
            <loc>'. route('videoLectureCategory.show', $video->slug) .'</loc>
            <lastmod>'. $video->updated_at->format('Y-m-d') .'</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
          </url>';
        }

        $posts = Post::get(['slug', 'updated_at']);
        foreach ($posts as $post) {
            $content .= '<url>
            <loc>' . route('post.show', $post->slug) . '</loc>
            <lastmod>' . $post->updated_at->format('Y-m-d') . '</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
          </url>';
        }

        // Adding static pages
        $staticRoutes = [
            'home.index',
            'home.companyInfo',
            'home.founderInfo',
            'videoLectureCategory.index',
            'trick.index',
            'contact.index',
            'service.index',
            'service.system_firm_report',
            'service.netradicni_vizualizace_dat',
            'post.index'
        ];

        foreach ($staticRoutes as $route) {
            $content .= '<url>
            <loc>'. route($route) .'</loc>
            <lastmod>'. date('Y-m-d') .'</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
            </url>';
        }

        $content .= '</urlset>';

        return response($content)->header('Content-Type', 'text/xml');
    }
}
