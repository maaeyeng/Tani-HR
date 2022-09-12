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
      <form method="post" action="{{ route('orders.update', $orders->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Customer Id:</label>
              <input type="text" class="form-control" name="cus_id" value="{{ $orders->cus_id }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Shipping Id :</label>
              <input type="text" class="form-control" name="ship_id" value="{{ $orders->ship_id }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Employee Id :</label>
              <input type="text" class="form-control" name="emp_id" value="{{ $orders->emp_id }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Due Date:</label>
              <input type="date" class="form-control" name="date" value="{{ date('d-M-y', strtotime($orders->date)) }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection