@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
<div class="card">

  <h2>All Products</h2>

  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->brand}}</td>
          <td>
            <a href="{{ route('details.product',[$product->id])}}" class="btn btn-primary">
              Details
            </a>
            <b></b>
            <a href="{{ route('delete.product',[$product->id])}}" class="btn btn-danger">
              Delete
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection


@section('javascripts')
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      });
  </script>
@endsection
