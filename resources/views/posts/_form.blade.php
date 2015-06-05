<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::label('venue_id', 'Venue:') !!}
    {!! Form::select('venue_id', $venues, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content','Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','rows' => 3 ]) !!}
</div>

<div class="form-group">
    {!! Form::label('datetime_start', 'Start:') !!}
    {!! Form::input('date','datetime_start', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('datetime_end', 'End:') !!}
    {!! Form::input('date','datetime_end', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($submit,['class' => 'btn btn-primary form-control']) !!}