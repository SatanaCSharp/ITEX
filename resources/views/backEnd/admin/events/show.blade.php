@extends('backLayout.app')
@section('title')
    Event
@stop

@section('content')

    <h1>Event</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>Title</th>
                <th>Description</th>
                <th>State</th>
                <th>Company id</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $event->id }}</td>
                <td> {{ $event->title }} </td>
                <td> {{ $event->description }} </td>
                <td> {{ $event->state }} </td>
                <td> {{ $event->company_id }} </td>
                <td> {{ $event->date }} </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection