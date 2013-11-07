!function ($) {
  'use strict';

  //the pickup)_date needs the datepicker
  $('#pickup_date').datepicker();

  //only form that should be on the homepage!
  $('form').on('submit', function (e) {
    //this form
    var $form = $(this);

    //validate the fields
    var $inputs = $form.find('input, select'), data = {}, valid = true;

    //do we have errors? then disable until it appears again
    if ($inputs.parent().parent().hasClass('has-error')) {
      $inputs.parent().parent().removeClass('has-error');
    }

    $inputs.each(function () {
      var $input = $(this);

      //check the value, cant be empty
      if ($input.val() == '') {
        //add error class to its parent parent, so like its grandparent <--- see what i did there?
        $input.parent().parent().addClass('has-error');

        valid = false; //this form is dirty now and we wont continue.
      }
      else {
        //the input is good! store it
        //I guess the laravel way to create the submit makes it an input...
        //do not store that
        if (!($input.prop('type') == 'submit')) {
          data[$input.attr('name')] = $input.val();
        }
      }
    });

     console.log(data);

    if (!valid) {
      //stop it from doing its normal shit
      e.preventDefault();
    }
  })
}(jQuery);