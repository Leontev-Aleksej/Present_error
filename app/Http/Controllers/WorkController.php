<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::where('user_id', Auth::user()->id)->get();
        $categories = Category::all();
        $userId = Auth::id();
        return view('works.index', compact('works', 'userId', 'categories'));
    }
    public function create()
    {
        $categories = Category::all();
        $works = Work::all();
        return view('works.create', compact('categories', 'works'));
    }
    public function store(Request $request): RedirectResponse 
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'path_img' => 'image|mimes:png,jpg,jpeg,gif|max:800',
          ]);

          $imageName = time() . '.' . $request['path_img']->extension();
          $request['path_img']->move(public_path('images'), $imageName);
          
          Report::create([
            'title' => $request->title,
            'path_img' => $imageName,
            "user_id" => Auth::user()->id,
            "category_id" => $request->category,
            "score" => "без оценки",
        ]);

          return redirect()->route('dashboard');
    }
    public function update(Request $request)
    {
        $request->validate([
            'score' => ['required'],
            'id' => ['required']
          ]);

          Work::where('id', $request->id)->update([
            'score' => $request->score,
        ]);
        return redirect()->back();
    }
}
