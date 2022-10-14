@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        @auth
        <h1>Dashboard</h1>
    
    <h1 class="mb-3">ABZ fleet company</h1>

    <div class="bg-light p-4 rounded">
        <h2>Vehicles</h2>
        <div class="lead">
            Manage your vehicles here.
            <a href="{{ route('vehicles.create') }}" class="btn btn-primary btn-sm float-right">Add vehicle</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th>fleet_number</th>
             <th>Driver Name</th>
             <th>status</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($vehicles as $key => $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->name }}</td>
                <td>{{ $vehicle->fleet_number }}</td>
                <td>{{ $vehicle->driver->name }}</td>
                <td>{{ $vehicle->status }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('vehicles.show', $vehicle->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('vehicles.edit', $vehicle->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['vehicles.destroy', $vehicle->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $vehicles->links() !!}
        </div>

    </div>


        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
