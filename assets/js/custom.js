$(document).ready(function() {

    var slider = document.getElementById("bookRate");
    var output = document.getElementById("rateRange");
    output.innerHTML = slider.value;
    
    slider.oninput = function() {
      output.innerHTML = this.value;
    }

    //Form validation

    $("#myForm").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
            name: "required",
            category: "required",
            range: "required",
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
        },
        // Specify validation error messages
        messages: {
            name: "Please enter your bookname",
            category: "Please enter category",
            range: "Please enter book rate",
            email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
          form.submit();
        }
      });

      //Change Background Value in Range
      $('input[type="range"]').change(function () {
        var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
        
        $(this).css('background-image',
                    '-webkit-gradient(linear, left top, right top, '
                    + 'color-stop(' + val + ', #007bff), '
                    + 'color-stop(' + val + ', #C5C5C5)'
                    + ')'
                    );
    });

});