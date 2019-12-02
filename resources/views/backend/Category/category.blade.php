@extends('backend.master');

@section('styles')
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
@endsection

@section('content')
  <div class="container bg-dark">
    <h2>Category</h2>
    <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Add New Category
      </a>
    </p>
    <div class="collapse" id="collapseExample">
      <div class="container bg-dark">
          <form class="form-inline" method="POST" action="{{ route('store.category') }}">
              @csrf
          <div class="form-group mx-sm-3 mb-2">
            <label for="name" class="sr-only">Category Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
      </div>
    </div>
    </div>
  <!-- //...................................................................................................................... -->
  </br></br>
  <table class="table table-bordered" id="datatable">
    <thead>
      <tr>
        <th scope="col">Srial</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php $id=1?>
    @foreach($categories as $category)
    <tbody>
        <tr>
          <td>{{$id++}}</td>
          <td>{{$category->name}}</td>
          <td>
            <a href="{{route('edit.category',[$category->id])}}" class="btn btn-success">
              Update
            </a>
            <b></b>
            <a href="{{route('delete.category',[$category->id])}}" class="btn btn-danger">
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
