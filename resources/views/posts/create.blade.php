@extends('app')

@section('content')

    <h2>Add a new Post</h2>
    <hr />

    @include('errors.list')

    {!! Form::open(['route' => 'posts.store','role' => 'form', 'class' => 'form-horizontal'])  !!}

    @include('posts._form',['submit' => 'Add a new Post'])

    {!! Form::close()  !!}


@stop