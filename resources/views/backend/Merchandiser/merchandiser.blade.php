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
      @foreach($merchandisers as $merchandiser)
        <tr>
          <td>{{$merchandiser->id}}</td>
          <td>{{$merchandiser->user_name}}</td>
          <td>{{$merchandiser->phone_no}}</td>
          @if($merchandiser->status=='pending')
          <td>
            <button type="button" class="btn btn-warning" >
              {{$merchandiser->status}}
            </button>
          </td>
          @else
          <td>
            <button type="button" class="btn btn-success" >
              {{$merchandiser->status}}
            </button>
          </td>
          @endif
          <td>
            <a href="{{ url('/details/user',[$merchandiser->id])}}">
              <button class="btn btn-primary">
                Details
              </button>
            </a>
            <b></b>
            <a href="{{ route('delete.user',[$merchandiser->id])}}" class="btn btn-danger">
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
