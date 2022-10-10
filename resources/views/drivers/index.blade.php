@extends('layouts.app-master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Drivers List</h5>
                </div>
                <div class="lead">
                    Manage your Drivers here.
                    <a href="{{ route('drivers.create') }}" class="btn btn-primary btn-sm float-right">Add a driver</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            {{-- <div class="card-header"><h3>Customers List</h3></div> --}}
            <div class="card-body">
              @include('drivers.table')
            </div>
        </div>
    </div>
</div>

@endsection
