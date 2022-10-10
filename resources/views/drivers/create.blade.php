@extends('layouts.app-master')
@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h3>Create Driver</h3></div>
            <div class="card-body">
              @include('drivers.fields')
            </div>
        </div>
    </div>

</div>
@endsection
