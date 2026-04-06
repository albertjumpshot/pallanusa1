<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Lawyer;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function index()
    {
        $totalArticles = Article::count();
        $totalLawyers = Lawyer::count();
        $totalServices = Service::count();

        return view('admin.dashboard', [
            'totalArticles' => $totalArticles,
            'totalLawyers' => $totalLawyers,
            'totalServices' => $totalServices,
        ]);
    }
}