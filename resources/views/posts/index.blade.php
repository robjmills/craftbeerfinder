@extends('app')


@section('content')
    <div class="page-header">
        <a href="{{ route('posts.create') }}" class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Add new Post</a>
        <h2>Posts</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Location</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->venue->name }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['posts.destroy',$post->id], 'role' => 'form', 'method' => 'delete','onsubmit' => 'return confirm("Are you sure you want to delete this post?");']) !!}
                        <div class="btn-group">
                            <a class='btn btn-default btn-xs' href="{{ route('posts.edit',$post->id) }}" title="edit">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a class='btn btn-success btn-xs' href="{{ route('posts.show',$post->id) }}" title="view">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <button class="btn btn-danger btn-xs" title="delete">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center">No venues created</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@stop