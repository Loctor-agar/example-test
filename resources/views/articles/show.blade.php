@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-2">
            {{--            @dd($article)--}}
            <div class="col-12 col-lg-8">
                <span>{{ $article->views }}
                <i class="fa fa-eye" aria-hidden="true"></i></span>
                <div class="col-4">
                    <span>{{ $article->author_user->name }}</span>
                </div>
                <div class="col-4">
                    <span>{{ $article->title }}</span>
                </div>
                <div class="col-4">
                    <span>{{ $article->date }}</span>
                </div>
                <div class="col-4">
                    <img src="{{ asset('storage/'.$article->logo) }}" alt="" style="width: 500px; height: 500px;">
                </div>
                <div class="col-8">
                </div>
                <div class="col-12">
                    {!! $article->content !!}
                </div>
            </div>
            @include('blocks.sidebar.right-sidebar')
        </div>
    </div>

@endsection
