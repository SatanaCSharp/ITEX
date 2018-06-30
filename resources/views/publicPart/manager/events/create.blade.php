@extends('publicPart.layouts.app')

@section('content')
    <!-- Create new event -->
    <section class="new-event col-md-10">
        <div class="title-text">
       <span>
         Create new event
       </span>
        </div>

        {!! Form::open(['url' => 'manager/companies/'.$companyId.'/events', 'class' => 'form-horizontal']) !!}

        <div class="form-group row">
            <span class="col-md-3 lable-text">Title</span>
            {!! Form::text('title', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text">Description</span>
            {!! Form::textarea('description', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text">Date</span>
            <div class="col-sm-6">
                <input type="text" name="date" class="form-control datetimepicker-input" id="datetimepicker5"
                       data-toggle="datetimepicker" data-target="#datetimepicker5" required/>
            </div>
        </div>

        </div>
        <div class="form-group row">
            <span class="col-md-3 lable-text">State of excursion</span>
            <div class="state"> {!! Form::select('state', [ 1=>"In planing", 0 =>"Occurred"]) !!} </div>
        </div>

        <div class="form-group row">
            <span class="col-md-3">Duration</span>
            {!! Form::number('duration', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
        </div>
        <div class="form-group row">
            <span class="col-md-3 lable-text"></span>
            {!! Form::submit('CREATE', ['class' => 'btn btn-primary col-md-6','id'=>"btn-create"]) !!}
        </div>
        {!! Form::close() !!}
    </section>

@endsection