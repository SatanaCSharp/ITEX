@extends('backLayout.app')
@section('title')
    Edit Comment
@stop

@section('content')

    <h1>Edit Comment</h1>
    <hr/>

    {!! Form::model($comment, [
        'method' => 'PATCH',
        'url' => ['admin/reports/'.$reportId.'/comments', $comment->id],
        'class' => 'form-horizontal'
    ]) !!}

    <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
        {!! Form::label('user_id', 'User Id: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('user_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('report_id') ? 'has-error' : ''}}">
        {!! Form::label('report_id', 'Report Id: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::number('report_id', $reportId, ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('report_id', '<p class="help-block">:message</p>') !!}
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