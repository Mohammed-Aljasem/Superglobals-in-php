<?php
if (array_key_exists('search', $_POST)) {

  $a = $_POST['search'];
  header("location:" . $a);
  echo $a;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="search">
    <input type="submit" value="GO">
  </form>
</body>

</html>