<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Banner;
use App\Models\Program;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Course;
use App\Models\Partnership;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel categories
        $categories = Category::all();
        $banners = Banner::all();
        $programs = Program::all();
        $articles = Article::with('mentor', 'tag')->get();
        $tags = Tag::all();
        $courses = Course::all(); 
        $partnerships = Partnership::all();

        // Kirim data categories ke view
        return view('pages.home', [
            'categories' => $categories,
            'banners' => $banners,
            'programs' => $programs,
            'articles' => $articles,
            'tags' => $tags,
            'courses' => $courses,
            'partnerships' => $partnerships,
        ]);
    }
}
