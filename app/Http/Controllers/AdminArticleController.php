<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->when(request('status'), function ($query) {
                $query->where('status', request('status') == 'publish' ? 'PUBLISH' : 'DRAFT');
            })
            ->when(request('keyword'), function ($query) {
                $query->where('title', 'like', '%' . request('keyword') . '%');
            })
            ->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required',
                'slug' => 'nullable|string|max:50',
                'image' => 'nullable|image|max:2048',
                'status' => 'required|in:DRAFT,PUBLISH'
            ]);

            $data = $request->except(['image']);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/articles'), $imageName);
                $data['image'] = 'images/articles/' . $imageName;
            }

            Article::create($data);

            return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage(), $e->getTrace());
        }
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'nullable|string|max:50',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|in:DRAFT,PUBLISH'
        ]);

        $data = $request->except(['image']);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/articles'), $imageName);
            $data['image'] = 'images/articles/' . $imageName;
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }



}
