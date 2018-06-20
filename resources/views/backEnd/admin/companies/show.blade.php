@extends('backLayout.app')
@section('title')
    Company
@stop

@section('content')

    <h1>Company</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>ID.</th>
                <th>Logo</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ $company->id }}</td>
                <td> {{ $company->logo }} </td>
                <td> {{ $company->title }} </td>
                <td> {{ $company->description }} </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection