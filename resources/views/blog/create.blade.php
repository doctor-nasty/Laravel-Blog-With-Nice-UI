@extends('layouts.master', ['title' => 'Create Post'])



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
<section class="section-padding privacy-policy-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="contact-form-box shadow-box mb--30">

                <div class="privacy-policy-content">
                    <div class="section-title">
                        <h5 class="title">Create Blog Post</h5>
                    </div>
                    @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <form action="{{ route('store_new_post') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" name="category_id" required>
                            <option value="">Select a Category</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                                {{-- @if ($category->children)
                                    @foreach ($category->children as $child)
                                        <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                                    @endforeach
                                @endif --}}
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter blog title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Meta Description</label>
                        <textarea class="form-control" name="metabody" id="metabody" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="body">Blog Content</label>
                        <textarea class="form-control" name="body" id="body" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Feature Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
