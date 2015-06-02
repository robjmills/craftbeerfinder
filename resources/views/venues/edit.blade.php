@extends('app')

@section('content')

    <h2>Edit: {{ $venue->name }}</h2>
    <hr />

    @include('errors.list')

    {!! Form::model($venue, ['route' => ['venues.update',$venue->id],'method' => 'PATCH', 'role' => 'form', 'class' => 'form-horizontal'])  !!}

        @include('venues._form',['submit' => 'Edit Venue'])
    
    {!! Form::close()  !!}


@stop