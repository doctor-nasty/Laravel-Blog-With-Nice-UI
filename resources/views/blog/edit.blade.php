@extends('layouts.master', ['title' => 'Edit Post'])



@section("content")
@push('head')
<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea#body',
        themes: "inlite",
        plugins: "code image link textcolor",
        skin: "oxide-dark",
    content_css: "dark",
    height: 500,
        toolbar: 'undo redo | styleselect | bold italic | image link | alignleft aligncenter alignright alignjustify | outdent indent | code',

        setup: function (editor) {
        editor.on('change', function (e) {
            editor.save();
        });
    },


    });
</script>
@endpush
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="contact-form-box shadow-box mb--30">

            <a href="/" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-4">Edit Post</h1>
                <p>Edit and submit this form to update a post</p>

                <hr>

                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" id="title" class="form-control" name="title"
                                   placeholder="Enter Post Title" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="body">Meta Description</label>
                            <textarea class="form-control" name="metabody" id="metabody" required>{{ $post->metabody }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Blog Content</label>
                            <textarea class="form-control" name="body" id="body" required>{{ $post->body }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Feature Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" value="{{ $post->image }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Update Post
                            </button>
                        </div>
                    </div>
                </form>

        </div>
        </div>
    </div>
</div>


@endsection
