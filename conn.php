<?php
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "location");
  $result = mysqli_query($conn, 'SET NAMES utf8');
?>