@extends('ridelink.admin.layouts.master')

@section('content')
  <div class='ridelink-admin-login container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='row'>
          <div class='col-md-6 col-md-offset-3'>
            <div class='ridelink-admin-login-form well well-sm'>
              @if (Session::get('logout'))
              <div class='alert alert-success'>
                {{Session::get('message')}}
              </div>
              @endif
              @if (Session::get('error'))
              <div class='alert alert-danger'>
                <strong>ERROR!</strong> {{Session::get('message')}}
              </div>
              @endif
              <div class='page-header'>
                <h4>RideLink Admin Login</h4>
              </div>
              {{ Form::open(
                array(
                'route' => 'admin.login',
                'class' => 'form-horizontal'
                )) }}
                <div class='form-group'>
                  {{Form::label('email', 'Email', array('class' => 'control-label col-md-2'))}}
                  <div class='col-sm-10'>
                    {{Form::text('email', '', array('class' => 'form-control'))}}
                  </div>
                </div>
                <div class='form-group'>
                  {{Form::label('password', 'Password', array('class' => 'control-label col-md-2'))}}
                  <div class='col-sm-10'>
                    {{Form::password('password', array('class' => 'form-control'))}}
                  </div>
                </div>
                <div class='form-group'>
                  <div class='col-md-offset-2 col-md-10'>
                    {{Form::submit('Login', array('class' => 'btn btn-warning'))}}
                  </div>
                </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@overwrite
