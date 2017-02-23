<?php
  $section = $_POST['section'];
  $content = $_POST['content'];

  $path = $_SERVER['DOCUMENT_ROOT'] . "/content/";

  file_put_contents($path . $section . ".txt", $content);

  header("Location: ../index.php");
?>