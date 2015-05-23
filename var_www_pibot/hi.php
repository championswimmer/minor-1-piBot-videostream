<?php
if ($_GET['run'] == 'f') {
  # This code will run if ?run=true is set.
  echo exec("echo fcommand");
} 
if ($_GET['run'] == 's') {
  # This code will run if ?run=true is set.
  echo exec("echo scommand");
}
if ($_GET['run'] == 'b') {
  # This code will run if ?run=true is set.
  echo exec("echo bcommand");
}

?>
<script type="text/javascript">
	function myAjax() {
      $.get("../hi.php?run=f",function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });

      });
 }
</script>
<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?run=f">Forward</a>
<br><br>
<a href="?run=s">Stop</a>
<br><br>
<a href="?run=b">Backward</a>
<br>
 <p onmouseup="myAjax()">Click the text!</p>

