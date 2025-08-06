@extends('layouts.admin')

@section('title', 'Articles')

@section('breadcrumbs', 'Overview Articles')

@section('css')
    <style>
        .underline:hover {
            text-decoration: underline;
        }
        .table-medium th {
            background-color: #33b751 !important;
            color: white;
        }
        .status-draft {
            font-style: italic;
            color: #dc3545;
        }
        .status-published {
            font-style: italic;
            color: #28a745;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- button create --}}
                    <div class="mb-3 text-right">
                        <a href="{{ route('articles.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i> Create
                        </a>
                    </div>

                    {{-- display filter --}}
                    <div class="row mb-3">
                        <div class="col-md-7">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == NULL ? 'active' : '' }}" 
                                       href="{{ route('admin.articles.index') }}">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == 'publish' ? 'active' : '' }}" 
                                       href="{{ route('admin.articles.index', ['status' => 'publish']) }}">Publish</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == 'draft' ? 'active' : '' }}" 
                                       href="{{ route('admin.articles.index', ['status' => 'draft']) }}">Draft</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <form action="{{ route('admin.articles.index') }}" method="GET">
                                <div class="input-group">
                                    <input name="keyword" type="text" value="{{ Request::get('keyword') }}" 
                                           class="form-control" placeholder="Filter by title">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-info">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- alert --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    {{-- table --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="25%">Article Title</th>
                                    <th width="20%">Slug</th>
                                    <th width="15%">Created Date</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $index => $article)
                                    <tr>
                                        <td class="text-center">{{ $index + $articles->firstItem() }}</td>
                                        <td>
                                            <a href="{{ route('articles.edit', $article->id) }}" 
                                               style="color: #00838f;" class="underline">
                                                {{ $article->title }}
                                            </a>
                                        </td>
                                        <td>{{ $article->slug }}</td>
                                        <td class="text-center">
                                            {{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }}
                                        </td>
                                        <td class="text-center">
                                            @if ($article->status == 'DRAFT')
                                                <span class="status-draft">Draft</span>
                                            @else
                                                <span class="status-published">Published</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('articles.edit', $article->id) }}" 
                                               class="btn btn-sm btn-warning text-light" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form class="d-inline" method="POST" 
                                                  action="{{ route('articles.destroy', $article->id) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this article?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No articles found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- pagination --}}
                    @if ($articles->hasPages())
                        <div class="mt-3">
                            {{ $articles->appends(request()->except('page'))->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection