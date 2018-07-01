@extends('publicPart.layouts.app')

@section('content')

    <section class="create_report col-md-10">
        <div class="title-text">
           <span>
             Create report
           </span>
        </div>
        {!! Form::open(['url' => 'manager/events/'.$idEvent.'/reports', 'class' => 'form-horizontal','enctype' => 'multipart/form-data', 'files' => true,]) !!}

        <div class="form-group row lable-text {{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label lable-report']) !!}
            <div class="col-sm-6">
                {!! Form::text('title', null, ['class' => 'form-control name-report', 'required' => 'required']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group row lable-text {{ $errors->has('description') ? 'has-error' : ''}}">
            {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label description-text']) !!}
            <div class="col-sm-6">
                {!! Form::textarea('description', null, ['class' => 'form-control report-description', 'required' => 'required']) !!}
                {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group row ">
            <span class="col-md-3 lable-text">Date Creation</span>
            <div class="col-sm-6">
                <input type="text" name="date_creation" class="form-control datetimepicker-input datetimepicker-fild contacts" id="datetimepicker5"
                       data-toggle="datetimepicker" data-target="#datetimepicker5" required/>
            </div>
        </div>

        <div class="form-group row {{ $errors->has('images') ? 'has-error' : ''}}">
            {!! Form::label('images', 'Images: ', ['class' => 'col-sm-3 control-label label-img']) !!}
            <div class="button-add">
                <div class="add-images">{!! Html::image('images/add-file.png') !!} </div>
                <div class="plus">
                {!! Form::file('images[]', ['id' => 'btn-add', 'class' => 'form-control', 'multiple'=>'multiple', 'required' => 'required']) !!}

                </div>
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

            <div class="btn-create">
                {!! Form::submit('Create', [ 'id' => 'button-create', 'class' => 'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close() !!}

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </section>
@endsection