<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function index() {
      return Inertia::render('User/Privacy', []);
    }
}
