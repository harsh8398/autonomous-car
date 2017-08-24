/* onload functions */
$(document).ready(function() {
  $('#headlight_alert').parent('div').hide();
});

/* Ajax Functions for PHP funtion Calls */
function headlightAjax() {
  if(document.getElementById('headlight').checked) {
    $.ajax({
      type: "GET",
      url: './php/headlightAjax.php',
      data:{action:'TURN_ON_HEADLIGHT'},
      success:function(data) {
        // alert(data);
        if(data == "Something went wrong!") {
          $("#headlight_alert").parent('div').removeClass("alert-success").addClass("alert-danger");
        }
        $('#headlight_alert').parent('div').show();
        $("#headlight_alert").html(data);
      }
    });
  } else {
      $.ajax({
        type: "GET",
        url: './php/headlightAjax.php',
        data:{action:'TURN_OFF_HEADLIGHT'},
        success:function(data) {
          // alert(data);
          if(data == "Something went wrong!") {
            $("#headlight_alert").parent('div').removeClass("alert-success").addClass("alert-danger");
          }
          $('#headlight_alert').parent('div').show();
          $("#headlight_alert").html(data);
        }
      });
    }
}
