<?php
error_reporting(E_ERROR | E_PARSE);
$number1 = $_POST['number1'];

$number2 = $_POST['number2'];



if (array_key_exists('Addition', $_POST)) {
  $process = $_POST['Addition'];
  $x = "+";
  if ($number1 == null || $number2 == null) {
    echo "enter your numbers";
  }
  calculator($number1, $number2, $process);
} elseif (array_key_exists('Subtraction', $_POST)) {
  $GLOBALS['process'] = $_POST['Division'];
  calculator($number1, $number2, $process);
  $x = "-";
  if ($number1 == null || $number2 == null) {
    echo "enter your numbers";
  }
} elseif (array_key_exists('Division', $_POST)) {
  $GLOBALS['process'] = $_POST['Division'];
  calculator($number1, $number2, $process);
  $x = "/";
  if ($number1 == null || $number2 == null) {
    echo "enter your numbers";
  }
} elseif (array_key_exists('Multiplication', $_POST)) {
  $GLOBALS['process'] = $_POST['Multiplication'];
  calculator($number1, $number2, $process);
  $x = "x";
  if ($number1 == null || $number2 == null) {
    echo "enter your numbers";
  }
}



function calculator($number1, $number2, $process)
{
  $result = 0;
  if ($process == "Addition" && $number1 == !null && $number2 == !null) {
    $result = $number1 + $number2;
  } elseif ($process == "Subtraction") {
    $result = $number1 - $number2;
  } elseif ($process == "Division") {
    $result = $number1 / $number2;
  } elseif ($process == "Multiplication") {
    $result = $number1 * $number2;
  }


  return $result;
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
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <?php
    ?>
    <hr>
    <label for="number1">Enter first number: </label>
    <br>
    <input type="number" name="number1">
    <br>
    <br>

    <label for=""><?php echo $number1 . ' ' . $x . ' ' . $number2 ?></label>
    <br>
    <br>
    <label for="number2">Enter second number</label>
    <br>
    <input type="number" name="number2">

    <br>
    <br>
    <hr>
    <button type="submit" name="Addition" value="Addition">+</button>
    <button type="submit" name="Subtraction" value="Subtraction">-</button>
    <button type="submit" name="Division" value="Division">/</button>
    <button type="submit" name="Multiplication" value="Multiplication">x</button>
    <hr>
    <br>
    <hr>
    <label for=""><?php echo "<strong> Result:</strong> " . "<strong>" . calculator($number1, $number2, $process) . "</strong>" ?></label>
    <hr>


  </form>
</body>

</html>