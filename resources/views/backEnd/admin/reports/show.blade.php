@extends('backLayout.app')
@section('title')
    Report
@stop

@section('content')

    <h1>Report</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date Creation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $report->id }}</td>
                <td> {{ $report->title }} </td>
                <td> {{ $report->description }} </td>
                <td> {{ $report->date_creation }} </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection