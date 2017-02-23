<?php
if(isset($_POST['user']) && isset($_POST['pass'])) {
  $file = "users.txt";  
  $handle = fopen($file, "r");
  $login = $_POST['user'] . "_" . $_POST['pass'];
  $found = false;
  
  if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $line = preg_replace("/\r\n|\r|\n/", "", $line);
      if($line == hash("sha256", $login)) {
        $found = true;
      }
    }
    fclose($handle);
  }
  else {
    echo "error";
  }
  
  if($found) {
    session_start();
    $_SESSION['user'] = $_POST['user'];
    header("Location: ../index.php?msg=success");
  }
  else {
    echo "nicht gefunden";
  }
}
?>