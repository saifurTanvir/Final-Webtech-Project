<?php
  session_start();
?>
<h1>Hello, This is Search Result Page!</h1>
<?php
  echo $_POST["bal"];

  $conn = mysqli_connect('localhost', 'root', '', 'sms');
  $sql = "select * from midmarks where studentid='{$_POST["bal"]}' ";
  $result = mysqli_query($conn, $sql);
  while ($user = mysqli_fetch_assoc($result)) {
    echo "Mid Total Marks: ".$user['term']."<br>";

  }

  
  
  
?>