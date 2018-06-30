@extends('publicPart.layouts.app')

@section('content')

    {{--<div class="card rounded-circle">--}}
        {{--<img class="card-img-top" {!! Html::image('images/company/logos/'.$company->title.'/'.$company->logo.'') !!}  alt="Card image" >--}}
    {{--</div>--}}

     {{--<h3>{{$company->title}}</h3>--}}
     {{--<h3>{{substr($company->description,0,30)}}...</h3>--}}
     {{--<h3>{{$company->contacts}}</h3>--}}
     {{--<h3>{{ $company->location}}</h3>--}}

    {{--<a href="{{url('/manager/companies/'.$company->id.'/events/create')}}">Create event</a>--}}

    <div class="jumbotron card_company">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="company-logo-manager">
                        {!! Html::image('images/company/logos/'.$company->title.'/'.$company->logo.'') !!}
                    </div>
                </div>
                <div class="col-md-6 ">
                    <ul class="nav flex-column desc-list-company ">
                        <li class="nav-item ">
                                <h2><i class="fa fa-bookmark"></i> {{$company->title}}</h2>
                        </li>
                        <li class="nav-item">
                            <p class="desc_exc"><i class="fa fa-align-justify"></i>{{substr($company->description,0,30)}}... </p>
                        </li>
                        <li class="nav-item ">
                            <p class="desc_exc "><i class="fa fa-envelope"></i>{{ $company->contacts}}</p>
                        </li>
                        <li class="nav-item ">
                            <p class="desc_exc "> <i class="fas fa-map-marker-alt"></i>{{ $company->location}}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 create-event-manager ">
                    <a class="btn btn-primary " href="{{url('/manager/companies/'.$company->id.'/events/create')}}">Create event</a>
                </div>
            </div>
        </div>
    </div>

@endsection
