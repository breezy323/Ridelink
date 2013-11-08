<div class='item-wrapper bookit section' data-anchor='bookit'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-12">
        <div class='bookit-form'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Book your trip now</h3>
            </div>
            <div class="panel-body">
              <div class='pickup-type text-center'>
                <h4>Select your pickup type</h4>
                <div class='btn-group'>
                  <a class='btn btn-outline-inverse btn-md'>To Airport</a>
                  <a class='btn btn-outline-inverse btn-md'>Point to point</a>
                  <a class='btn btn-outline-inverse btn-md'>Hourly</a>
                </div>
              </div>
              <div class='container'>
              <div class='row'>
                {{ Form::open(array('route' => 'booking.store', 'class' => 'form-horizontal')) }}
                  <div class='col-md-3 well well-sm'>
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
                  </div>
                {{ Form::close() }}
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
