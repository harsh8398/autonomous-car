<html>
<head>
<title>login</title>
<link rel = "stylesheet" type="text/css" href="login.css">
</head>
<body id="demo" onload="myFunction()">

<form action="Logout.php" method="post">
	<h1>&nbsp &nbsp &nbsp &nbsp &nbsp Welcome</h1><br><br><br>
	<b>User name:</b>
	<input type="text" name="Name1" id="s2" class="t1" onChange="chk_name()"><span id="e4"></span><br><br>
	<b>Password &nbsp:</b>
	<input type="password" name="p1" id="p1" class="t1"><span id="e5"></span><br><br><br>
	<input type="submit" value="submit" class="button"/><br><br>
</form>

<script>
	var count=0;
	var pics=new Array(5);
	pics[0]="http://dcervin.com/i/2017/02/blue-black-hd-wallpaper-iphone.jpg";
	pics[1]="http://widefon.com/_ld/50/16199632.jpg";
	pics[2]="http://vunature.com/wp-content/uploads/2016/11/sea-ocean-nature-beach-bokeh-blue-beauty-waves-wallpaper-hd-1080p-1366x768.jpg";
	pics[3]="https://s-media-cache-ak0.pinimg.com/originals/a2/dc/da/a2dcdab68aee007b4d04b6643d0a1904.jpg";
	pics[4]="https://ksnorton.files.wordpress.com/2015/02/dark-blue-sunset-rocks-river-nature-wallpapers.jpg";
	function myFunction() {
	 setInterval(function(){
					document.querySelector("#demo").style.backgroundImage = "url("+pics[count]+")";
					count++;
					if(count>4){count=0;} }, 5000);
}
</script>
</body>
</html>

