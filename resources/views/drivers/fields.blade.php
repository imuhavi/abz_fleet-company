<form action="{{ route('drivers.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputName1">Name</label>
        <input type="text" name="name" value="{{ isset($driver) ? $driver->name : '' }}" class="form-control" id="exampleInputName1" placeholder="Name">
        @if (isset($driver))
        <input type="hidden" name="driver_id" value="{{ $driver->id }}">
        @endif
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" value="{{ isset($driver) ? $driver->email : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Phone</label>
                <input type="tel" name="phone" value="{{ isset($driver) ? $driver->phone : '' }}" class="form-control" id="exampleInputEmail3" placeholder="Phone">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword4">Company</label>
        <input type="text" name="company" value="{{ isset($driver) ? $driver->company : '' }}" class="form-control" id="exampleInputPassword4" placeholder="Company">
    </div>

    <div class="form-group">
        <label for="exampleTextarea1">Address</label>
        <textarea class="form-control" name="address" id="exampleTextarea1" rows="4">{{ isset($driver) ? $driver->address : '' }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>
