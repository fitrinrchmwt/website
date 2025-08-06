@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Artikel</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white shadow-md rounded-md p-4">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-semibold">{{ $article->title }}</h2>
                <p class="text-sm text-gray-600 mt-2">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                <a href="{{ route('artikel.show', $article->slug) }}" class="text-blue-600 hover:underline mt-2 inline-block">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Artikel</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="bg-white shadow-md rounded-md p-4">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-semibold">{{ $article->title }}</h2>
                <p class="text-sm text-gray-600 mt-2">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                <a href="{{ route('artikel.show', $article->slug) }}" class="text-blue-600 hover:underline mt-2 inline-block">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
