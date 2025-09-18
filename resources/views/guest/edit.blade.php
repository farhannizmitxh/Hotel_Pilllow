@extends('layout')

@push('style')
    <style>
        th {
            padding: 10px !important;
        }
    </style>
@endpush

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="fw-bold mb-0">Edit Reservation</h4>
                </div>
                <div class="card-body">
                    <form action="/guest/{{ $guest->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <input type="text" name="name" id="code" class="form-control"
                                placeholder="Name" value="{{ $guest->name }}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="phone" class="form-control mb-2" placeholder="Nomor Telepon" required
                             placeholder="Name" value="{{ $guest->phone }}">
                        </div>
                        <div class="mb-2">
                           <input type="text" name="identity_number" class="form-control mb-2" placeholder="Nomor Telepon" required
                             placeholder="Name" value="{{ $guest->identity_number }}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="identity_photo" class="form-control mb-2" placeholder="Foto Identitas"
                                value="{{ $guest->identity_photo }}">
                        </div>
                        <div class="mb-2 text-end">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
