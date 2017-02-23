<?php
if(isset($_GET['section']) && $_GET['section'] != "") {
  echo file_get_contents("../content/" . $_GET['section'] . ".txt");
}
?>