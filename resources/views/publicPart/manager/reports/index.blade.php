@extends('publicPart.layouts.app')

@section('content')

        <h3>{{$report->title}}</h3>
        <h3>{{$report->description}}</h3>
        @forelse($reports as $item)
            <img class="card-img-top"
                 {!! Html::image('/images/reports/idEvent-'.$idEvent.'/'.$item->images) !!}
                 alt="Card image">
        @empty
            <h3>There are no images</h3>
        @endforelse
        <h3>{{$report->date_creation}}</h3>
@endsection