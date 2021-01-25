<?php


echo $_SERVER['SCRIPT_NAME'];
echo "<hr>";
session_start();
if (!isset($_POST['todos'])) {
  $_SESSION['todo_lists'] = array();
} else {
  $item = in_array($_POST['todos'], $_SESSION['todo_lists']);
  if ($item) {
    $search = array_slice($_SESSION['todo_lists'], -1);

    $lastItem = in_array($_POST['todos'], $search);
    if ($lastItem) {
      echo $_POST['todos'] . " => " . "is the last task Todo List";
    } else {
      echo $_POST['todos'] . " => " . "The task in Todo List";
    }
  } else {
    array_push($_SESSION['todo_lists'], $_POST['todos']);
  }
  echo "<hr>";
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
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="todos">
    <input type="submit" value="Add">
  </form>

  <div>
    <ul>
      <?php
      if (isset($_SESSION['todo_lists'])) {


        function todoList($x)
        {
          $s = array_unique($x);

          foreach ($s as $key => $task) {
      ?>
            <li>
              <?php
              echo $task;
              echo "<a http://localhost/php/todo/todo.php?id=$key'>"
              ?> <button name="delete">Delete</button></li>
      <?php
          }
        }
        todoList($_SESSION['todo_lists']);
      }
      ?>
    </ul>



  </div>
</body>

</html>