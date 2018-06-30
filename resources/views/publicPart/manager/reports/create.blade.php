@extends('publicPart.layouts.app')

@section('content')

    <center><h3>Create report</h3></center>
    {!! Form::open(['url' => 'manager/events/'.$idEvent.'/reports', 'class' => 'form-horizontal','enctype' => 'multipart/form-data', 'files' => true,]) !!}

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
    <div class="form-group row">
        <span class="col-md-3 lable-text">Date Creation</span>
        <div class="col-sm-6">
            <input type="text" name="date_creation" class="form-control datetimepicker-input" id="datetimepicker5"
                   data-toggle="datetimepicker" data-target="#datetimepicker5" required/>
        </div>
    </div>

    <div class="form-group {{ $errors->has('images') ? 'has-error' : ''}}">
        {!! Form::label('images', 'Images: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('images[]', ['class' => 'form-control', 'multiple'=>'multiple', 'required' => 'required']) !!}
            {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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