@extends('ridelink.admin.layouts.master')

@section('title', 'RideLink :: Admin - Users')

@section('content')
  @include('ridelink.admin.template.header')

  <div class='ridelink-admin-users container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='page-header'>
          <h3>Users</h3>
        </div>
        <table class='table table-striped '>
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $_user)
            <tr>
              <td>{{$_user->first_name}} {{$_user->last_name}}</td>
              <td>{{$_user->email}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@overwrite