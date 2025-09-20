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
        <h4 class="fw-bold mb-0 " >Room Category</h4>
        <button type="button" class=" btn btn-primary align-content-end ms-auto">Tambah</button>
        </div>
    </div>
     <div class="card mt-5 mb-6">
                    <h5 class="card-header">Tambah</h5>
                    <div class="card-body">
                      <div class="mb-4 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" value="Sneat" id="html5-text-input" />
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="html5-search-input" class="col-md-2 col-form-label">Price</label>
                        <div class="col-md-10">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label">Room_size</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" value="john@example.com" id="html5-email-input" />
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label">Capacity</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" value="john@example.com" id="html5-email-input" />
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="html5-tel-input" class="col-md-2 col-form-label">Bed Setup</label>
                        <div class="col-md-10">
                          <input class="form-control" type="tel" value="90-(164)-188-556" id="html5-tel-input" />
                        </div>
                      </div>

                    </div>
                  </div>
@endsection
