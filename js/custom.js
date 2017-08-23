/* Ajax Functions for PHP funtion Calls */
function headlightAjax() {
  if(document.getElementById('headlight').checked) {
    $.ajax({
      type: "GET",
      url: './php/headlightAjax.php',
      data:{action:'TURN_ON_HEADLIGHT'},
      success:function(data) {
        alert(data);
      }
    });
  } else {
      $.ajax({
        type: "GET",
        url: './php/headlightAjax.php',
        data:{action:'TURN_OFF_HEADLIGHT'},
        success:function(data) {
          alert(data);
        }
      });
    }
}
