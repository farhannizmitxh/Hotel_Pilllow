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
            <h4 class="fw-bold mb-0">Employee</h4>

            <table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Phone</th>
      <th>Email</th>
      <th>password</th>
      <th>Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>HAHA</td>
      <td>090589588394</td>
      <td>Ntn@gmail.com</td>
      <td>!222121</td>
      <td>
        <a href="" class="btn btn-primary">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    
    
    </tbody>
</table>

        </div>
       
        <container class="mt-3 mb-3 me-3"> 
            <div class="text-end">
                <a href="" class="btn btn-success">Tambah Fasilitas</a>
            </div>
    </container>


@endsection

