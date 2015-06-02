@extends('app')

@section('content')

    <h2>Add a new Venue</h2>
    <hr />

    @include('errors.list')

    {!! Form::open(['route' => 'venues.store','role' => 'form', 'class' => 'form-horizontal'])  !!}

        @include('venues._form',['submit' => 'Add a new Venue'])
    
    {!! Form::close()  !!}


@stop