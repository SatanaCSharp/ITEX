@extends('backLayout.app')
@section('title')
    Edit Report
@stop

@section('content')

    <center><h1>Edit Report</h1></center>

    <hr/>

    {!! Form::model($report, [
        'method' => 'PATCH',
        'url' => ['admin/events/'.$idEvent.'/reports', $report->id],
        'class' => 'form-horizontal'
    ]) !!}

    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
        {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('date_creation') ? 'has-error' : ''}}">
        {!! Form::label('date_creation', 'Date Creation: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            <div class='input-group date' id='datetimepicker1'>
                {!! Form::text('date_creation', null, ['class' => 'form-control', 'required' => 'required']) !!}
                {!! $errors->first('date_creation', '<p class="help-block">:message</p>') !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
    <div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
        {!! Form::label('images', 'Images: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('images', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('images', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('event_id') ? 'has-error' : ''}}">
        {!! Form::label('event_id', 'Event Id: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('event_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('event_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection