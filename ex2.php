<?php
  $str = "Go boy";
  $prefix = "Go";
  $length = strlen($prefix);
  if (substr($str, 0, $length) == $prefix) {
    echo "The string starts with 'Go'.";
  } else {
    echo "The string does not start with 'Go'.";
  }
?>
