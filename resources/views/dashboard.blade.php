@extends('layouts')
@section('content')

<style>
 ul  {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #555;
}

li {
   float: left;
   color: #FFC300;
}

li a {
  display: block;
  color: #DAF7A6;
  text-align: center;
  text-decoration: none;
}

li a:hover:not(.active) {
    padding: 1.0 rem;
  background-color: #fff;
}

.active {
  background-color: #4CAF50;
}
</style>
<div class="row">
    <h1>Tain-ERP </h1>
</div>
<div class="row">
    <ul style="list-style-type: none;float:left;">
        <li style="padding: 1.5rem;float:left;"><a href="sales">Sales</a></li>
        <li style="padding: 1.5rem;float:left;">Order</li>
        <li style="padding: 1.5rem;float:left;">Production</li>
        <li style="padding: 1.5rem;float:left;">Matrial</li>
        <li style="padding: 1.5rem;float:left;">Manufacturing</li>
        <li style="padding: 1.5rem;float:left;">Maintanice</li>
        <li style="padding: 1.5rem;float:left;">Warehouse</li>
        <li style="padding: 1.5rem;float:left;">Stock</li>
        <li style="padding: 1.5rem;float:left;">Transport</li>
        <li style="padding: 1.5rem;float:left;">Finalnce</li>
        <li style="padding: 1.5rem;float:left;">Accounting</li>
        <li style="padding: 1.5rem;float:left;">Human Resource</li>
        
</ul>
</div>
<div class="row">
    <div class="col-2">
        <ul class="card m-0 p-0" style="list-style-type:none;">
            <li class="card-header p-2">Menu</li>
            <li class="p-2">DashBoard</li>
            <li class="p-2">Item</li>
            <li class="p-2">Banking</li>
            <li class="p-2">Sales</li>
            <li class="p-2">Purches</li>
            <hr />
            <li class="p-2">Time Tracking</li>
            <li class="p-2">Accountant</li>
            <hr />
            <li class="p-2">Report & Document</li>
            <li class="p-2">Predictive</li>
</ul>
</div>
    <div class="col-8 card">
        <h5 class="card-header">Tani-ERP Word Space</h5>
<div class="card p-2" style="width:18rem;">
    <h5 class="card-header">Create Order</h5>
    <span class="card-body">
        Order
</span>
</div>
<div class="card p-2" style="width:18rem;">
    <h5 class="card-header">Product</h5>
    <span class="card-body">
        Product
</span>
</div>
</div>
<div class="col-2 card">
    <h5 class="card-header">Short Document</h5>
</div>
</div>