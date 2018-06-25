@extends('backLayout.app')
@section('title')
    Create new Event
@stop

@section('content')

    <h1>Create New Event</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/companies/'.$id.'/events', 'class' => 'form-horizontal']) !!}

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

    <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
        {{--including dateTime-picker--}}
        {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            <div class='input-group date' id='datetimepicker1'>
                {!! Form::text('date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
        <div class="form-group {{ $errors->has('state') ? 'has-error' : ''}}">
            {!! Form::label('state', 'State: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('state', null, ['class' => 'form-control', 'required' => 'required']) !!}
                {!! $errors->first('state', '<p class="help-block">:message</p>') !!}
            </div>


        </div>
        <div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
            {!! Form::label('duration', 'Duration: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('duration', null, ['class' => 'form-control', 'required' => 'required']) !!}
                {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
            {!! Form::label('company_id', 'Company Id: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('company_id', $id, ['class' => 'form-control disabled', 'required' => 'required']) !!}
                {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
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