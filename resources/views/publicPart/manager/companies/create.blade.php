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

            <div  class="card-body">
                <a href="#" id="add" class="btn btn-primary col-md-2">
                    {!! Html::image('images/add.png') !!}
                </a>
            </div>
        </div>

        <div class="form-group row">
            <span class="col-md-3">Company name</span>
            <input type="text" class="form-control col-md-6">
        </div>

        <div class="form-group row">
            <span class="col-md-3">Description</span>
            <textarea class="form-control description col-md-6" rows="5"></textarea>
        </div>

        <div class="form-group row">
            <span class="col-md-3">Contacts</span>
            <input type="text" class="form-control contacts col-md-6">
        </div>

        <div class="form-group row">
            <span class="col-md-3">Location</span>
            <input type="text" class="form-control location col-md-6">
        </div>

        <div class="form-group row">
            <span class="col-md-3"></span>
            <button id="btn-create" type="button" class="btn btn-primary col-md-6">CREATE</button>
        </div>
    </section>

@endsection