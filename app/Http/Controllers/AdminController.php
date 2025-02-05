<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        $works = Work::all();
        $categories = Category::all();
        return view('admin.index', compact('works', 'categories'));
    }
}
