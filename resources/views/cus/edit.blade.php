@extends('orders.layouts')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Customer 
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
      <form method="post" action="{{ route('customers.update', $customers->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Customer Id:</label>
              <input type="text" class="form-control" name="cus_id" value="{{ $customers->id }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Customer Name :</label>
              <input type="text" class="form-control" name="ship_id" value="{{ $customers->cus_name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Customer Email :</label>
              <input type="text" class="form-control" name="ship_id" value="{{ $customers->email }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection