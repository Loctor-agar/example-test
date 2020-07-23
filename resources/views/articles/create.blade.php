@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <form action="{{ route('article.store') }}" class="container bg-form card-body-admin" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 row justify-content-center pt-2">
                        <h2 class="font-weight-bold">Сreate Post</h2>
                    </div>
                    <div class="form-group">
                        <label for="add_categories">Author:</label>
                        <select name="author" id="add_categories" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-2">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control">

                        </div>
                        <div class="col-12 col-lg-6 mt-2">
                            <label for="category">Categories:</label>
                            <select name="category_id" id="" class="custom-select">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-2">
                            <label for="title">{{__('Title')}} <span class="text-danger">*</span></label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6 mt-2">
                            <div class="form-group">
                                <label for="main_photo">Choose image:<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="main_photo" name="logo" accept="image/*"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <label for="content_area">Content:<span class="text-danger">*</span></label>
                            <textarea name="content" id="content_id" cols="30" rows="10"
                                      class="form-control richTextBox"></textarea>
                        </div>


                        <div class="col-12 col-lg-6 py-4 my-3">
                            <label for="add_tags">Choose tags:</label>
                            <select name="tags" id="add_tags" class="js-example-basic-multiple" multiple>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="submit" name="upload" id="upload"
                               class="btn btn-primary" value="Submit"></td>
                    </div>
                </form>
            </div>

        </div>
    </div>


@endsection

@push('styles')
    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>--}}
    <link rel="stylesheet" href="{{ asset('css/multiselect.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        .select2-container {
            width: auto !important;
            min-width: 100px;
        }
    </style>
@endpush
@push('scripts')
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script src="{{ asset('js/editor.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush

