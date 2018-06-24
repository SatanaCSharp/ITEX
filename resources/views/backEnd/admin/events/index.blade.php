@extends('backLayout.app')
@section('title')
    Event
@stop

@section('content')

    <a href="{{ url('admin/companies/') }}" class="btn btn-primary pull-left btn-sm">Back</a>

    <br>
    <br>

    <center><h1>Events</h1></center>


    {{--<h1>Events <a href="{{ route(['companies.events.index',$events->company_id])}}" class="btn btn-primary pull-right btn-sm">Add New Event</a>--}}
    {{--</h1>--}}
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin-events">
            <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Company id</th>
                <th>State</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $item)
                <tr>
                    <td></td>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ url('admin/companies/'.$idCompany.'/events/', $item->id) }}">{{ $item->title }}</a>
                    </td>
                    <td>{{ substr($item->description,0,30 )}}...</td>
                    <td>{{ $idCompany }}</td>
                    <td>{{ $item->state }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                        <a href="{{ url('admin/companies/'.$idCompany.'/events/' . $item->id . '/edit') }}"
                           class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/companies/'.$idCompany.'/events', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                        {!! Form::close() !!}

                        @if($item->state == 2)
                            <a href="{{ url('admin/events/'. $item->id.'/reports') }}" class="btn btn-warning btn-xs">Report</a>
                            <a href="{{ url('admin/events/'. $item->id.'/reports/create') }}" class="btn btn-default btn-xs">Create Report</a>
                        @endif
                    </td>

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
            $('#tbladmin-events').DataTable({
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