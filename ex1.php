<?php
  $str = "Mahmoud Essam";
  $first_two = substr($str, 0, 2);
  $last_two = substr($str, -2);
  if ($first_two == $last_two) {
    echo "The first two and last two characters are the same.";
  } else {
    echo "The first two and last two characters are not the same.";
  }
?>