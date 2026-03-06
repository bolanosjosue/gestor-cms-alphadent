<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Staff;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $publishedArticles = Article::where('status', 'published')->count();
        $draftArticles = Article::where('status', 'draft')->count();
        $staffCount = Staff::count();

        $latestPublished = Article::where('status', 'published')
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedArticles',
            'draftArticles',
            'staffCount',
            'latestPublished'
        ));
    }
}

