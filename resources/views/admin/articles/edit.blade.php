@extends('layouts.admin')

@section('title', 'Edit Article')

@section('breadcrumbs', 'Articles' )

@section('second-breadcrumb')
    <li>Edit</li>
@endsection

@section('css')
    <script src="/templateEditor/ckeditor/ckeditor.js"></script> 
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h3 align="center"></h3>
                    </div>
                    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-10">
                            <div class="mb-4">
                                <label for="title" class="font-weight-bold">Title</label>
                                <input type="text" name="title" placeholder="Article Title" class="form-control {{$errors->first('title') ? "is-invalid" : ""}}" value="{{old('title', $article->title)}}" required>
                                <div class="invalid-feedback"> {{$errors->first('title')}}</div>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="font-weight-bold">Slug</label>
                                <input type="text" name="slug" placeholder="Contoh-Article-Slug" class="form-control {{$errors->first('slug') ? "is-invalid" : ""}}" value="{{old('slug', $article->slug)}}" required>
                                <div class="invalid-feedback"> {{$errors->first('slug')}}</div>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="font-weight-bold">Content</label>
                                <textarea id="content" class="form-control ckeditor" name="content" rows="10" cols="50">{{old('content', $article->content)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="font-weight-bold">Foto/Gambar</label>
                                <input type="file" name="image" id="image" class="form-control {{$errors->first('image') ? "is-invalid" : ""}}" accept="image/*">
                                <div class="invalid-feedback">{{$errors->first('image')}}</div>
                                <div id="preview" class="mt-2">
                                    @if($article->image)
                                        <img src="{{ asset($article->image) }}" class="img-fluid" style="max-width:200px;max-height:200px;" />
                                    @endif
                                </div>
                            </div>
                            <div class="mb-3 mt-4">
                                <button class="btn btn-secondary" name="status" value="DRAFT">Save as draft</button>
                                <button class="btn btn-success" name="status" value="PUBLISH">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- ckeditor --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('#categories').select2();
        // Preview gambar
        document.getElementById('image').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            preview.innerHTML = '';
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function(ev) {
                    preview.innerHTML = '<img src="' + ev.target.result + '" class="img-fluid" style="max-width:200px;max-height:200px;" />';
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
    </script>
@endsection