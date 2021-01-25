<?php
$cookie_name = "user";
$cookie_value = "mohammed aljasem";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


?>
<html>

<body>

  <?php
  if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }


  ////////////////DELETE COOKIE /////////////////


  // if (isset($_COOKIE[$cookie_name])) {
  //   unset($_COOKIE[$cookie_name]);
  //   setcookie($cookie_name, null, -1, '/');
  //   echo "Value is: " . $_COOKIE[$cookie_value];
  //   return true;
  // } else {
  //   return false;
  // }
  ?>

</body>

</html>