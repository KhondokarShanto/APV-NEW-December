@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
<div class="card">
  <h2>All Orders</h2>
  
  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Area</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($orders as $order)
      <tr>
        <td>{{$order->id}}</td>
        <td>{{$order->merchandiser->user_name}}</td>
        <td>{{$order->merchandiser->phone_no}}</td>
        <td>{{$order->area->name}}</td>
        <td>{{$order->status}}</td>
        <td>
          <a href="{{ route('details.order',[$order->merchandiser_id])}}"class="btn btn-success">
            Details
          </a>
          <b>
          </b>
          <a href="{{route('delete.order',[$order->id])}}"class="btn btn-danger">
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
