@extends('app')


@section('content')
    <div class="page-header">
        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Add new Post</a>
        <h2>Posts</h2>
    </div>

@stop