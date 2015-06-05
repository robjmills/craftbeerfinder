@extends('app')

@section('content')

    <h2>Edit: {{ $post->title }}</h2>
    <hr />

    @include('errors.list')

    {!! Form::model($post, ['route' => ['posts.update',$post->id],'method' => 'PATCH', 'role' => 'form', 'class' => 'form-horizontal'])  !!}

        @include('posts._form',['submit' => 'Edit Post'])
    
    {!! Form::close()  !!}


@stop