<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       
    }

    public function writer()
    {
        return Inertia::render('Dashboard/Writer/Add');
    }
}
