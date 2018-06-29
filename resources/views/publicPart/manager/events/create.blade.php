@extends('publicPart.layouts.app')

@section('content')
<!-- Create new event -->
<section class="new-event" >
    <div class="title-text">
       <span>
         Create new event
       </span>
    </div>
    <div class="form-group row">
        <span class="col-md-3 lable-text">Tour</span>
        <input type="text" class="form-control col-md-6">
    </div>

    <div class="form-group row">
        <span class="col-md-3 lable-text">Description</span>
        <textarea class="form-control description col-md-6" rows="5"></textarea>
    </div>

    <div class="form-group row">
        <span class="col-md-3 lable-text">Date</span>
        <input type="text" class="form-control contacts col-md-6">
    </div>

    <div class="form-group row">
        <span class="col-md-3">Duration</span>
        <input type="text" class="form-control location col-md-6">
    </div>

    <div class="form-group row">
        <span class="col-md-3">Compane</span>
        <input type="text" class="form-control location col-md-6">
    </div>

    <div class="form-group row">
        <span class="col-md-3 lable-text">User</span>
        <input type="text" class="form-control location col-md-6">
    </div>

    <div class="form-group row">
        <span class="col-md-3 lable-text"></span>
        <button id="btn-create" type="button" class="btn btn-primary col-md-6">CREATE</button>
    </div>
</section>
    @endsection