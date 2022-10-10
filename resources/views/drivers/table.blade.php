
<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th style="width: 100px">Email</th>
            <th style="width: 120px">Address</th>
            <th>Company</th>
            <th>Phone</th>
            <th>Created At</th>
            <th class="nosort">Operation</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($drivers as $key => $driver)
        <tr>
            <td>{{ $driver->id  }}</td>
            <td>{{ $driver->name }}</td>
            <td>{{ $driver->email }}</td>
            <td>{{ $driver->address }}</td>
            <td>{{ $driver->company }}</td>
            <td>{{ $driver->phone }}</td>
            <td>{{ $driver->created_at }}</td>
            {{-- <td>
                <div class="table-actions d-flex">
                    <a href="{{ route('drivers.edit', $driver->id) }}"><i class="ik ik-edit-2"></i>Edit</a>
                    <a href="#" data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i>Delete</a>

                </div>
            </td> --}}
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('drivers.show', $driver->id) }}">Show</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('drivers.edit', $driver->id) }}">Edit</a>
            </td>
            <td></td>
        </tr>
        @include('drivers.delete')
        @endforeach
    </tbody>
</table>
