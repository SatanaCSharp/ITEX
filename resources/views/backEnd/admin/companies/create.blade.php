@extends('backLayout.app')
@section('title')
    Create new Company
@stop

@section('content')

    <h1>Create New Company</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/companies', 'enctype' => 'multipart/form-data', 'files' => true, 'class' => 'form-horizontal']) !!}

    <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
        {!! Form::label('logo', 'Logo: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::file('logo', null, ['class' => 'form-control']) !!}
            {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
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
    <div class="form-group {{ $errors->has('contacts') ? 'has-error' : ''}}">
        {!! Form::label('contacts', 'Contacts: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('contacts', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('contacts', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
        {!! Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
        {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
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