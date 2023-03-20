<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($value='')
    {
        $posts = BlogPost::latest()->get();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
