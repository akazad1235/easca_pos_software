@extends('backend.components.app')
@section('content')
<div class="card">
    <div class="card-header">
      <div class="d-flex">
        <h3 class="card-title">DataTable with default features</h3>
        <a class="btn btn-info" href="{{route('products.create')}}">Create User</a>
      </div>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      {{-- <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $key=>$product)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <button class="btn btn-info">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
               </tr>
            @endforeach
        </tfoot>
      </table> --}}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
