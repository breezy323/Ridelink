<div class='item-wrapper index'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-9'>
        <h1>Ridelink</h1>
        <p class='lead'>The name your price transporation company*</p>
      </div>
      <div class='col-md-3 well well-sm'>
        {{ Form::open(array('route' => 'home.book', 'class' => 'form-horizontal')) }}

          <div class='form-group'>
            {{ Form::label('pickup_type', 'Select Your Pick Up', array('class' => 'control-label col-md-12')) }}
            <div class='col-sm-12'>
              {{Form::select('pickup_type', 
                array(
                'to_airport' => 'To Airport',
                'point_point' => 'Point To Point',
                'hourly' => 'Hourly'
                ), null, array('class' => 'form-control'))
              }}
            </div>
          </div>

          <div class='form-group'>
            {{ Form::label('pickup_date', 'Pick Up Date', array('class' => 'control-label col-md-12')) }}
            <div class='col-sm-12'>
              {{Form::text('pickup_date', '', array('class' => 'form-control', 'placeholder' => 'mm/dd/yyyy'))}}
            </div>
          </div>

          <div class='form-group'>
            {{ Form::label('pickup_location', 'Pick Up Location', array('class' => 'control-label col-md-12')) }}
            <div class='col-sm-12'>
              {{Form::text('pickup_location', '', array('class' => 'form-control', 'placeholder' => 'location'))}}
            </div>
          </div>

          <div class='form-group'>
            {{ Form::label('drop_location', 'Drop Off Location', array('class' => 'control-label col-md-12')) }}
            <div class='col-sm-12'>
              {{Form::text('drop_location', '', array('class' => 'form-control', 'placeholder' => 'address, city, state zip'))}}
            </div>
          </div>

          {{ Form::submit('Go', array('class' => 'btn btn-warning btn-block')) }}
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>