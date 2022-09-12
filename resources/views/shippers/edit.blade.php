@extends('orders.layouts')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Order 
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shippers.update', $shippers->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Customer Id:</label>
              <input type="text" class="form-control" name="shipper_name" value="{{ $shippers->shipper_name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Shipping Id :</label>
              <input type="text" class="form-control" name="place" value="{{ $shippers->place }}"/>
          </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection