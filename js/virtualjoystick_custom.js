console.log("touchscreen is", VirtualJoystick.touchScreenAvailable() ? "available" : "not available");

			var joystick	= new VirtualJoystick({
				container	: document.getElementById('container'),
				mouseSupport	: true,
			});
			joystick.addEventListener('touchStart', function(){
				console.log('down')
			})
			joystick.addEventListener('touchEnd', function(){
				console.log('up')
			})

			setInterval(function(){
				var outputEl = document.getElementById('joy_coords');
				outputEl.innerHTML	= '<b>Result:</b> '
					+ ' dx:'+joystick.deltaX()
					+ ' dy:'+joystick.deltaY()
					+ (joystick.right())
					+ (joystick.up()	? ' up'		: '')
					+ (joystick.left()	? ' left'	: '')
					+ (joystick.down()	? ' down' 	: '')

        // ajax
        $.ajax({
          type: "GET",
          url: './php/joystickAjax.php',
          data:{top:joystick.top(), right:joystick.right(), down:joystick.down(), left:joystick.left()},
          success:function(data) {
            // alert(data);
            // do nothing
            // for debug uncomment alert or use innerHTML
          }
        });
			}, 1/30 * 1000);
