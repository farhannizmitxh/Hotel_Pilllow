@extends('layout')

@push('style')
    <style>
        th {
            padding: 10px !important;
        }
    </style>
@endpush

@section('content')

<div class="card">
        <div class="card-header">
            <h4 class="fw-bold mb-0">Fasilitas</h4>

            <table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama Fasilitas</th>
      <th>Deskripsi</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Kolam Renang</td>
      <td>Kolam renang outdoor.</td>
      <td>Aktif</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Aula</td>
      <td>Kapasitas hingga 100 orang, dilengkapi proyektor.</td>
      <td>Aktif</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    </tbody>
</table>

        </div>
       
        <container class="mt-3 mb-3"> 
            <div class="text-end">
                <a href="" class="btn btn-success">Tambah Fasilitas</a>
            </div>
    </container>


@endsection