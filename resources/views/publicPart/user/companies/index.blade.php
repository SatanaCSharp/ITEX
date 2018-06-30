@extends('publicPart.layouts.app')

@section('content')

    <div class="card rounded-circle">
        <img class="card-img-top" {!! Html::image('images/company/logos/'.$company->title.'/'.$company->logo.'') !!}  alt="Card image" >
    </div>

     <h3>{{$company->title}}</h3>
     <h3>{{substr($company->description,0,30)}}...</h3>
     <h3>{{$company->contacts}}</h3>
     <h3>{{ $company->location}}</h3>

    <a href="{{url('/manager/companies/'.$company->id.'/events/create')}}">Create event</a>

@endsection