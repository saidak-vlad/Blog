@section('title','статті')
@extends('layout.layout')

@include('partials.header')
@section('main_content')
    <!-- $posts->links()-->
    @foreach($posts as $post)
        @include('partials.posts.item', ['post' => $post])
    @endforeach
    <br>
    <div class="row justify-content-center">
        {!! $posts->links() !!}
    </div>





@endsection
