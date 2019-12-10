@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
  <div class="container bg-dark">
    <h2>Area</h2>

    @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @if (session('status'))
      <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
          {{ session('status')}}
      </div>
    @endif
    @if (session('message'))
      <div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
          {{ session('message')}}
      </div>
    @endif

    <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add New Area
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="container bg-dark">
        <form class="form-inline" method="POST" action="{{ route('store.area') }}">
          @csrf
          <div class="form-group mx-sm-3 mb-2">
            <label for="name" class="sr-only">Area Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Area Name">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="postcode" class="sr-only">postcode</label>
            <input type="text" name="postcode" class="form-control" id="postcode" placeholder="postcode">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="description" class="sr-only">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="description">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

  </br></br>
  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Srial</th>
        <th scope="col">Name</th>
        <th scope="col">Area-Code</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <?php $id=1?>
    @foreach($areas as $area)
    <tbody>
      <tr>
        <td>{{$id++}}</td>
        <td>{{$area->name}}</td>
        <td>{{$area->postcode}}</td>
        <td>{{$area->description}}</td>
        <td>
          @if (auth()->user()->type=='admin')
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Update
          </button>
          <b></b>
          <a href="{{route('delete.area',[$area->id])}}"class="btn btn-danger">
            Delete
          </a>
          @endif
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Update Area Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{ route('update.area',[$area->id])}}" method="post" role="form" >
        @csrf
          <div class="form-group">
            <label for="name">Name:</label>
              <input class="form-control" id="name" type="text" name="name" placeholder="Name" value="{{$area->name}}"/>
          </div>
          <div class="form-group">
              <label for="name">Postal Code:</label>
              <input class="form-control" id="postcode" type="text" name="postcode" placeholder="Postal Code" value="{{$area->postcode}}" />
          </div>
          <div class="form-group">
              <label for="name">Description:</label>
              <input class="form-control" id="description" type="text" name="description" placeholder="Description" value="{{$area->description}}" />
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
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
