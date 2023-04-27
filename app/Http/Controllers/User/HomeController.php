<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index', [
        ]);
    }

}
