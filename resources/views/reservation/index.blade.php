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
        <div class="card-header">
            <h4 class="fw-bold mb-0">Reservasi</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 col-lg-4">
                    <form action="/reservation" method="post">
                        @csrf
                        <input type="text" class="form-control mb-2" name="code" placeholder="Masukkan Kode Reservasi"
                            required>
                        <select name="guest_id" id="guest_id" class="form-control mb-2" required>
                            <option value="" hidden>-- Pilih Guest --</option>
                            @foreach ($guests as $guest)
                                <option value="{{ $guest->id }}">{{ $guest->name }}</option>
                            @endforeach
                        </select>
                        <select name="status" id="status" class="form-control mb-2" required>
                            <option value="" hidden>-- Pilih Status --</option>
                            <option value="Pending">Pending</option>
                            <option value="Booked" selected>Booked</option>
                            <option value="Check in">Check in</option>
                            <option value="Check out">Check out</option>
                        </select>
                        <input type="text" class="form-control mb-2" name="voucher" placeholder="Masukkan Kode Voucher">
                        <div class="text-end">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                       <div class="row">
                         <div class="col-6 col-lg-4">
                          <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Guest</th>
                                    <th>Status</th>
                                    <th>Voucher</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $rsv)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rsv->code }}</td>
                                        <td>{{ $rsv->guest->name }}</td>
                                        <td>{{ $rsv->status }}</td>
                                        <td>{{ $rsv->voucher }}</td>
                                        <td class="d-flex">
                                            <a href="/reservation/{{ $rsv->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            &nbsp;
                                            <form action="/reservation/{{ $rsv->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                              </table>
                             </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
