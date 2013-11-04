@extends('ridelink.admin.layouts.master')

@section('title', 'RideLink :: Admin - Orders')

@section('content')
  @include('ridelink.admin.template.header')

  <div class='ridelink-admin-users container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='page-header'>
          <h3>Orders</h3>
        </div>
        <table class='table table-striped '>
          <thead>
            <tr>
              <th>Order #</th>
              <th>Customer</th>
              <th>Order Data</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
              <td>{{$order->id}}</td>
              <td>{{$order->user->first_name}} {{$order->user->last_name}}</td>
              <td>{{$order->entity}}</td>
              <td>{{$order->order_status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@overwrite