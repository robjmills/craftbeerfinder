@extends('app')


@section('content')
    <div class="page-header">
        <a href="{{ route('venues.create') }}" class="btn btn-primary btn-xs pull-right"><span class="glyphicon glyphicon-plus"></span> Add new Venue</a>
        <h2>Venues</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($venues as $venue)
                <tr>
                    <td>{{ $venue->id }}</td>
                    <td>{{ $venue->name }}</td>
                    <td class="text-center">
                        {!! Form::open(['route' => ['venues.destroy',$venue->id], 'role' => 'form', 'method' => 'delete','onsubmit' => 'return confirm("Are you sure you want to delete this venue?");']) !!}
                        <div class="btn-group">
                            <a class='btn btn-default btn-xs' href="{{ route('venues.edit',$venue->id) }}" title="edit">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a class='btn btn-success btn-xs' href="{{ route('venues.show',$venue->id) }}" title="view">
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