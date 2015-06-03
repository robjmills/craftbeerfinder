<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('city_id', 'City:') !!}
    {!! Form::select('city_id', $cities, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('type_id', 'Type:') !!}
    {!! Form::select('type_id', $types, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows' => 3 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address','Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control','rows' => 3 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('feature_list', 'Features:') !!}
    {!! Form::select('feature_list[]',$features, null, ['class' => 'form-control','multiple']) !!}
</div>


{!! Form::submit($submit,['class' => 'btn btn-primary form-control']) !!}