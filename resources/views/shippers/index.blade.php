@extends('prd.layouts')
@section('content')
<h1>Dashboard of Production</h1>
<div class="row">
<div class="col-2">
    <li>DashBoard</li>
    <li><a href="prd/create">Create Product</a></li>
    <li>Order Entry</li>
    <li>Checkout </li>
    <li>Process</li>
    <li>Complete</li>
</div>
<div class="col-10">
    <h3>Shipping Management System</h3>
    <table class="table table-hover">
        <thead>
            <tr>
            <td>Order Item</td>
            <td>Custmer</td>
            <td>Order Date</td>
            <td>Order Due</td>
            <td>Order Process</td>
            <td>% Complete</td>
            <td>Action</td>
        </tr>
        </thead>
        <tr>
            <td>1111</td>
            <td>Company A</td>
            <td>11/11/22</td>
            <td>11/12/22</td>
            <td>Production</td>
            <td>70%</td>
            <td><button class="btn btn-danger">Wait</button></td>
        </tr>

</table>
   <div class="col-8"> Test Zone Production</div>
   <div class="col-8">Test Zone Matiral</div>
   <div class="col-8">Test Zone Transports</div>
</div>
</div>
@endsection