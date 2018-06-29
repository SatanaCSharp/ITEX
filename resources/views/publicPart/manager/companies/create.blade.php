@extends('publicPart.layouts.app')

@section('content')
    <!-- create company -->
    <section class="company col-md-10">
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
                <a href="#" id="add" class="btn btn-primary">
                    {!! Html::image('images/add.png') !!}
                <div class="choose-file">{!! Form::file('logo', null, ['id' => 'add', 'class' => 'form-control']) !!}
                    {!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
                </div>
                </a>
            </div>
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text ">Company name</span>
            {!! Form::text('title', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text ">Description</span>
            {!! Form::textarea('description', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text ">Contacts</span>
            {!! Form::text('contacts', null, ['class' => 'form-control col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('contacts', '<p class="help-block">:message</p>') !!}
        </div>

        <div class="form-group row">
            <span class="col-md-3 lable-text ">Location</span>
            {!! Form::text('location', null, ['class' => 'form-control location col-md-6', 'required' => 'required']) !!}
            {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group row">
            <span class="col-md-3 lable-text ">User</span>

            <div class="col-md-6 input-user">{{$userName}}</div>
        </div>
        {{--<div class="form-group row">--}}
            {{--<span class="col-md-3 lable-text ">UserId</span>--}}
            {{--{!! Form::number('user_id', $userId, ['class' => 'form-control col-md-6']) !!}--}}
            {{--{!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}--}}
        {{--</div>--}}

        <div class="form-group row">
            <span class="col-md-3 lable-text "></span>
            {!! Form::submit('CREATE', ['id'=>'btn-create', 'class' => 'btn btn-primary col-md-6']) !!}
            {{--<button id="btn-create" type="button" class="btn btn-primary col-md-6">CREATE</button>--}}
        </div>
    </section>

@endsection