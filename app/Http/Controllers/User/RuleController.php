<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuleController extends Controller
{
    public function index() {
      return Inertia::render('User/Rule', []);
    }
}
