@extends('ridelink.layouts.master')

@section('title', 'RideLink :: The Name Your Price Car Service')

@section('content')
<div class='ridelink-home-wrapper'>
  @include('ridelink.template.home.index')
  @include('ridelink.template.home.bookit')
  @include('ridelink.template.home.comparison')
</div>
<script type="text/javascript" src='//code.jquery.com/jquery-1.9.1.js'></script>
<script type="text/javascript" src='//code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
<script type="text/javascript" src='js/plugins.js'></script>
<script type="text/javascript" src='js/main.home.js'></script>
@overwrite