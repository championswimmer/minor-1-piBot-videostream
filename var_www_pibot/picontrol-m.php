<?php
if ($_GET['run'] == 'f') {
  # This code will run if ?run=true is set.
  echo exec("touch /var/www/html/pibot/f");
  echo exec("beaglebot f");
} 
if ($_GET['run'] == 's') {
  # This code will run if ?run=true is set.
  echo exec("touch  /var/www/html/pibot/s");
  echo exec("beaglebot s");
}
if ($_GET['run'] == 'b') {
  # This code will run if ?run=true is set.
  echo exec("touch /var/www/html/pibot/b");
  echo exec("beaglebot b");
}
if ($_GET['run'] == 'l') {
  # This code will run if ?run=true is set.
  echo exec("touch /var/www/html/pibot/l");
  echo exec("beaglebot l");
} 
if ($_GET['run'] == 'r') {
  # This code will run if ?run=true is set.
  echo exec("touch /var/www/html/pibot/r");
  echo exec("beaglebot r");
}
if ($_GET['run'] == 'c') {
  # This code will run if ?run=true is set.
  echo exec("touch /var/www/html/pibot/c");
  echo exec("beaglebot f");
}


?>
<html>
<head>
	<style>
	html, body {
	    height: 100%;
	}

	html {
	    display: table;
	    margin: auto;
	}

	body {
	    display: table-cell;
	    vertical-align: middle;
	}
	</style>
</head>
<body>

<br>
<script type="text/javascript">
	function left() {
		var request = new XMLHttpRequest();
		request.open('POST', 'picontrol-m.php?run=l', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send(data);
	}
	function right() {
		var request = new XMLHttpRequest();
		request.open('POST', 'picontrol-m.php?run=r', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send(data);
		
	}
	function rev() {
		var request = new XMLHttpRequest();
		request.open('POST', 'picontrol-m.php?run=b', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send(data);
		
	}
	function fwd() {
		var request = new XMLHttpRequest();
		request.open('POST', 'picontrol-m.php?run=f', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send(data);
		
	}
	function stop() {
		var request = new XMLHttpRequest();
		request.open('POST', 'picontrol-m.php?run=s', true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		request.send(data);
		
	}
	document.onkeydown = checkKey;

	function checkKey(e) {

	    e = e || window.event;

	    if (e.keyCode == '38') { //up
	    	up();
	        //window.location.href = 'picontrol-m.php?run=f';
	    }
	    else if (e.keyCode == '40') { //down
	        window.location.href = 'picontrol-m.php?run=b';
	    }
	    else if (e.keyCode == '37') { //left
	        window.location.href = 'picontrol-m.php?run=l';
	    }
	    else if (e.keyCode == '39') { //right
	        window.location.href = 'picontrol-m.php?run=r';
	    }
	    else if (e.keyCode == '27') { //esc
	        window.location.href = 'picontrol-m.php?run=s';
	    }
	    else if (e.keyCode == '32') { //space
	        window.location.href = 'picontrol-m.php?run=s';
	    }
	}
</script>
<p align="center">
<a href="picontrol-m.php?run=l"><img   src="btn_left.png" ></a>
<a href="picontrol-m.php?run=f"><img   src="btn_fwd.png" ></a>
<a href="picontrol-m.php?run=s"><img   src="btn_o.png" ></a>
<a href="picontrol-m.php?run=b"><img   src="btn_rev.png" ></a>
<a href="picontrol-m.php?run=r"><img   src="btn_right.png" ></a>
</p>

<br>
<iframe height=480 width=640 src="http://wi-pi-bot.com:8090/stream_simple.html"></iframe>
<iframe height=480 width=640 src="./map.html"></iframe>

</body>
</html>
