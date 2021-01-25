<?php
$refreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if ($refreshed) {
  $i = 0;
  $i += 1;

  session_start();
  $_SESSION['counter'] += 1;

  echo "The number of refresh page is: " . $_SESSION['counter'];
} else {
  echo  "You are  not refreshed page yet!";
}
