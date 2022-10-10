@extends('layouts.app-master')

@section('content')
<form action="{{ route('vehicles.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Fleet Number</label>
                <input type="text" name="fleet_number"
                    value="{{ isset($vehicle) ? $vehicle->registration_number : '' }}" class="form-control"
                    id="exampleInputEmail3"  placeholder="Fleet Number ">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputName1">Driver Name</label>
                <select name="driver_id" class="form-control">
                    <option value="">Select</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}" @if (isset($vehicle))
                            {{ $vehicle->driver_id == $driver->id ? 'selected' : '' }}
                    @endif>
                    {{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Vehicle Name</label>
                <input type="text" name="name" value="{{ isset($vehicle) ? $vehicle->name : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Vehicle Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Charges (Kshs)</label>
                <input type="number" min="1" name="packing_charge" value="{{ isset($vehicle) ? $vehicle->packing_charge : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Parking Charges">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>

@endsection