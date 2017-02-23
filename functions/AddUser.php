<?php
if(isset($_POST['user']) && isset($_POST['pass']) && $_POST['pass'] == $_POST['passRe']) {
  $file = "users.txt";  
  $handle = fopen($file, "a");
  $login = hash("sha256", $_POST['user'] . "_" . $_POST['pass']);
  fwrite($handle, $login . "\n");
  header("Location: ../index.php");
}
else {
  echo "error";
}
?>