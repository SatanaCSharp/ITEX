@extends('publicPart.layouts.app')

@section('content')

    @forelse($events as $event)


        {{--<h3>{{$event->duration}} h</h3>--}}
        {{--@if($event->state == 0)--}}
            {{--<a href="{{url('/manager/events/'.$event->id.'/reports')}}">Report</a>--}}
            {{--<a href="{{url('/manager/events/'.$event->id.'/reports/create')}}">Create report</a>--}}
        {{--@endif--}}


{{--########################--}}

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
                            <h2> {{$event->title}}</h2>
                        </li>
                        <li class="nav-item">
                            <p class="desc_exc">{{substr($event->description,0,30)}}... </p>
                        </li>
                    @if($event->state == 1)
                        <li class="nav-item ">
                            <p class="desc_exc ">In planning</p>
                        </li>
                    @else
                        <li class="nav-item ">
                            <p class="desc_exc ">Occured</p>
                        </li>
                    @endif
                        <li class="nav-item">
                            <p class="desc_exc">{{$event->duration}}</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3" >
                    @if($event->state == 0)
                        <a class="btn btn-primary btn-event" href="{{url('/manager/events/'.$event->id.'/reports')}}">Report</a>
                        <a class="btn btn-primary btn-event" href="{{url('/manager/events/'.$event->id.'/reports/create')}}">Create report</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
    @empty
        <h3>There no excursions</h3>
    @endforelse
@endsection