@extends('backLayout.app')
@section('title')
    Company
@stop

@section('content')

    <center><h1>Companies</h1></center>

    <a href="{{ url('admin/companies/create') }}" class="btn btn-primary pull-right btn-sm">Add New Company</a>
    <br>
    <br>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin-companies">
            <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Logo</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $item)
                <tr>
                    <td></td>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/companies', $item->id) }}">{{ $item->logo }}</a></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ substr($item->description,0,30 )}}...</td>
                    <td>
                        <a href="{{ url('admin/companies/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/companies', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                        <a href="{{ url('admin/companies/' . $item->id . '/events') }}" class="btn btn-success btn-xs">Events</a>
                        <a href="{{ url('admin/companies/' . $item->id . '/events/create') }}"
                           class="btn btn-default btn-xs">Add Event</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#tbladmin-companies').DataTable({
                columnDefs: [{
                    targets: [0],
                    visible: false,
                    searchable: false
                },
                ],
                order: [[0, "asc"]],
            });
        });
    </script>
@endsection