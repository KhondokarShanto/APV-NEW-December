@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection


@section('content')
<div class="card">
  <h2>All Distributor</h2>

  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Sl.</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($distributors as $distributor)
        <tr>
          <td>{{$distributor->id}}</td>
          <td>{{$distributor->user_name}}</td>
          <td>{{$distributor->phone_no}}</td>
          @if($distributor->status=='pending')
          <td>
            <button type="button" class="btn btn-warning" >
              {{$distributor->status}}
            </button>
          </td>
          @else
          <td>
            <button type="button" class="btn btn-success" >
              {{$distributor->status}}
            </button>
          </td>
          @endif
          <td>
            <a href="{{ url('/details/user',[$distributor->id])}}">
              <button class="btn btn-primary">
                Details
              </button>
            </a>
            <b></b>
            <a href="{{ route('delete.user',[$distributor->id])}}" class="btn btn-danger">
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
