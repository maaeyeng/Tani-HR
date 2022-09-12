@extends('orders.layouts')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Employee 
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
      <form method="post" action="{{ route('employees.update', $employees->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Employee Id:</label>
              <input type="text" class="form-control" name="emp_id" value="{{ $employees->id }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Employee Name :</label>
              <input type="text" class="form-control" name="fristname" value="{{ $employees->fristname }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Employee Active :</label>
              <input type="text" class="form-control" name="active" value="{{ $employees->active }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection