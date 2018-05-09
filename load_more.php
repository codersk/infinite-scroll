<?php
  include('conn.php');

  $last_id=(isset($_GET['last_id']))? $_GET['last_id'] : 0;
  $q2 = "SELECT * FROM country WHERE id < '$last_id' ORDER BY id DESC LIMIT 10";
  $result2 = mysqli_query($conn, $q2);
  $last_id="";

  while($row=mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
    $msgID= $row['id'];
    $msg= $row['country'];
    echo '<div id="'. $msgID .'" class="message_box list-group-item" >'. $msg.'</div>';
  }
?>