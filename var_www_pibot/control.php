<?php
if ($_GET['run'] == 'f') {
  # This code will run if ?run=true is set.
  echo exec("echo f > /var/www/html/pibot/command");
} 
if ($_GET['run'] == 's') {
  # This code will run if ?run=true is set.
  echo exec("echo s > /var/www/html/pibot/command");
}
if ($_GET['run'] == 'b') {
  # This code will run if ?run=true is set.
  echo exec("echo b > /var/www/html/pibot/command");
}
if ($_GET['run'] == 'l') {
  # This code will run if ?run=true is set.
  echo exec("echo l > /var/www/html/pibot/command");
} 
if ($_GET['run'] == 'r') {
  # This code will run if ?run=true is set.
  echo exec("echo r > /var/www/html/pibot/command");
}
if ($_GET['run'] == 'c') {
  # This code will run if ?run=true is set.
  echo exec("echo s > /var/www/html/pibot/command");
}


?>