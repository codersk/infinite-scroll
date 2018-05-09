<?php
  $q1 = "SELECT * FROM country ORDER BY id DESC LIMIT 25";
  $result = mysqli_query($conn, $q1);

  while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $msgID= $row['id'];
    $msg= $row['country'];
    echo '<div id="'. $msgID .'" class="message_box list-group-item" >'. $msg.'</div>';
  }
?>