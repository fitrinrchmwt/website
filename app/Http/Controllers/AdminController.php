<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return redirect()->route('login')->withErrors(['message' => 'You do not have access to this page.']);
        }
        $data = [
            'draft'     => Article::where('status', 'DRAFT')->count(),
            'publish'   => Article::where('status', 'PUBLISH')->count()
        ];
        return view('admin.index', ['data' => $data]);
    }
}
