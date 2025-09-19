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
            <h4 class="fw-bold mb-5">Fasilitas</h4>

<form action="/facility" method="post">
    @csrf
  <div class="mb-3">
    <label for="Nama fasilitas" class="form-text">Nama Fasilitas</label>
    <input type="text" class="form-control" name="name" id="name" required>  
  </div>

  <div class="mb-5">
    <label for="Stock" class="form-label">Stok</label>
    <input type="tetx" class="form-control" name="stok" id="stok" required>
  </div>

 <div class="mb-5">   
<select name="type" id="type" class="form-select" aria-label="Default select example" required>
  <option value="">-- Tipe --</option>
  <option value="Consumeable">Consumeable</option>
  <option value="Inventory">Inventory</option>
</select>
  </div>

  <div class="ms-5 mb-4">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
 <table class="table table-hover mt-5">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Fasilitas</th>
            <th>Stok</th>
            <th>Tipe</th>
            <th>Aksi</th>
        </tr>
    </thead>
 

      <tbody>
           @foreach ($facilitys as $fac)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                     <td>{{ $fac->name }}</td>
                     <td>{{ $fac->stok }}</td>
                     <td>{{ $fac->type }}</td>
                     <td class="d-flex">
                        <a href="/facility/{{ $fac->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            &nbsp;
                            <form action="/facility/{{ $fac->id }}" method="post" class="mb-0">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>  
                                            
                        </td>
                     </tr>
            @endforeach
       </table>
      </tbody>
    </div>
  </div>
</div>
    
@endsection