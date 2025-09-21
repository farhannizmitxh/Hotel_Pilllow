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
                    <h4 class="fw-bold mb-0">Edit Facility</h4>
                </div>
                <div class="card-body">
                    <form action="/facility/{{ $facility->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <input type="text" name="name" class="form-control"
                                placeholder="Name" value="{{ $facility->name }}">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="stok" class="form-control mb-2" required
                             placeholder="Name" value="{{ $facility->stok }}">
                        </div>
                        <select name="type" id="type" class="form-select" aria-label="Default select example" required>
                            <option value="">-- Tipe --</option>
                            <option value="Consumeable">Consumeable</option>
                            <option value="Inventory">Inventory</option>
                        </select>
                        <div class="mb-2 mt-5 text-end">
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection