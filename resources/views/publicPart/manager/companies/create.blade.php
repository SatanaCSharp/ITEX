@extends('publicPart.layouts.app')

@section('content')
    <!-- create company -->
    <section class="company" >
        <div class="title-text">
       <span>
         Creation of a company
       </span>
        </div>
        <div class="avatar-company ">
            <div class="card rounded-circle">
                <img class="card-img-top" {!! Html::image('images/avatar.png') !!}  alt="Card image" >
            </div>

            {!! Form::open(['url' => 'manager/companies', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
            <div  class="card-body">
                <a href="#" id="add" class="btn btn-primary col-md-2">
                    {{--{!! Html::image('images/add.png') !!}--}}
                    {!! Form::file('logo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                </a>
            </div>
        </div>

        <div class="form-group row">
            <span class="col-md-3">Company name</span>
            {!! Form::text('title', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3">Description</span>
            {!! Form::textarea('description', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3">Contacts</span>
            {!! Form::text('contacts', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('contacts', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3">Location</span>
            {!! Form::text('location', null, ['class' => 'form-control location col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group row">
            <span class="col-md-3">User</span>
            <div class="col-md-6"><h3>{{$userName}}</h3></div>
        </div>
        <div class="form-group row">
            <span class="col-md-3">UserId</span>
            {!! Form::number('user_id', $userId, ['class' => 'form-control col-md-6']) !!}
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3"></span>
            {!! Form::submit('CREATE', ['class' => 'btn btn-primary col-md-6','id'=>'btn-create']) !!}
            {{--<button id="btn-create" type="button" class="btn btn-primary col-md-6">CREATE</button>--}}
        </div>
    </section>

@endsection