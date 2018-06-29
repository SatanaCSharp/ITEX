@extends('publicPart.layouts.app')

@section('content')

    @forelse($events as $event)
        <div class="card rounded-circle">
            <img class="card-img-top"
                 {!! Html::image('images/company/logos/'.$company->title.'/'.$company->logo.'') !!}  alt="Card image">
        </div>
        <h3>{{$event->title}}</h3>
        <h3>{{substr($event->description,0,30)}}...</h3>

        <h3>@if($event->state == 1)
                In planning
            @else
                Occured
            @endif
        </h3>

        <h3>{{$event->duration}} h</h3>
    @empty
        <h3>There no excursions</h3>
    @endforelse
@endsection