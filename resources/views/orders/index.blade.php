@extends('orders.layouts')
@section('content')
<h1>Order System</h1>
<a href="orders/create" class="btn btn-success">Add Order</a>
<table class="table">
    <thead>
        <tr>
            <td>Item</td>
            <td>Customer Name</td>
            <td>Employ Id</td>
            <td>Shipping Id</td>
            <td>Due Date</td>
            <td>Status</td>
        </tr>
</thead>
@foreach($orders as $order)
<tr>
<td><a href="{{ route('orders.edit', $order->id)}}">{{ $order->id }}</a></td>
<td><a href="{{ route('customers.edit', $order->cus_id)}}">{{ $order->cus_id }}</a></td>
<td><a href="{{ route('employees.edit', $order->emp_id)}}">{{ $order->emp_id }}</a></td>
<td><a href="{{ route('shippers.edit', $order->ship_id)}}">{{ $order->ship_id }}</a></td>
<td>{{ date('d-M-y', strtotime($order->date)) }}</td>
<td>{{ $order->status }}</td>
</tr>
@endforeach
@endsection