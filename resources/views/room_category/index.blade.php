@extends('layout')

@push('style')
<style>
    th {
        padding: 5px !important;
    }
</style>
@endpush

@section('content')

<div class="card">
    <div class="card-header d-flex">
        <h4 class="fw-bold mb-0 ">Room Category</h4>
    </div>
</div>
<div class="card mt-5 mb-6">
    <h5 class="card-header">room kategory</h5>

    <form action="/room_category" method="post">
        @csrf
        
        <div class="card-body">
            <div class="mb-4 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="html5-search-input" class="col-md-2 col-form-label">Price</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="price" name="price" required>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="html5-email-input" class="col-md-2 col-form-label">Room_size</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="room_size" name="room_size" required>
                </div>
            </div>
            <div class="mb-4 row">
                <label for="html5-email-input" class="col-md-2 col-form-label">Capacity</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" id="capacity" name="capacity" required>
                </div>
            </div>
            <label for="html5-email-input" class="col-md-2 col-form-label">Bed Setup</label>

            <select name="bed_setup" id="bed_setup" class="form-control mb-2" required>
                <option value="" hidden>-- Bed Setup --</option>
                <option value="single">single</option>
                <option value="double">double</option>
                <option value="twin">twin</option>
                <option value="suite">suite</option>
            </select>

        </div>
        <button type="submit" class=" btn btn-primary align-content-end ms-auto">Tambah</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Room_size</th>
                <th>Capacity</th>
                <th>Bed Setup</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>


            @foreach ($RoomCategorys as $RC )



            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $RC->name }}</td>
                <td>{{ $RC->price}}</td>
                <td>{{ $RC->room_size }}</td>
                <td>{{ $RC->capacity }}</td>
                <td>{{ $RC->bed_setup }}</td>
            </tr>
            <tr>
                @endforeach
        </tbody>
    </table>

    @endsection