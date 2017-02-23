<?php
  session_start();
  require_once("modules/Section.php");
  $header = new Section("content/header.txt");
  $start = new Section("content/start.txt");
  $about = new Section("content/about.txt");
  $contact = new Section("content/contact.txt");
  $footer = new Section("content/footer.txt");
  $edit = "";
  $auth = false;
  if (isset($_SESSION['user'])) {
    $edit = "editable";
    $auth = true;
  }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Single Page FBCMS">
    <meta name="author" content="">
    <title>SPCMS - mpdevelop</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-static-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">SPCMS</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#start">Start</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <?php 
        if($auth) {
          echo "<li class=nav-item>";
          echo "<a class='nav-link' href='#user'>Add User</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='functions/Logout.php'>Logout</a>";
          echo "</li>";
        }
        else {
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='#login'>Login</a>";
          echo "</li>";
        }
        ?>
      </ul>
      <?php 
      if($auth) { 
        echo "<span class='navbar-text pull-right'>Hallo " . $_SESSION['user'] . "</span>";
      }
      ?>
    </nav>

    <div class="jumbotron">
      <div class="container <?php echo $edit; ?>" id="header">
        <h1 class="display-3">Hallo!</h1>
          <?php echo $header->GetMarkdown(); ?>
      </div>
    </div>
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == "success") {
      echo "<div class='alert alert-success'>";
      echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
      echo "Success!";
      echo "</div>";
    }
    if (isset($_GET['msg']) && $_GET['msg'] == "error") {
      echo "<div class='alert alert-success'>";
      echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
      echo "Error!";
      echo "</div>";
    }
    ?>
    <div class="container-fluid">
      <div class="row section <?php echo $edit; ?>" id="start">
        <?php echo $start->GetMarkdown(); ?>
      </div>

      <div class="row section <?php echo $edit; ?>" id="about">
        <?php echo $about->GetMarkdown(); ?>
      </div>

      <div class="row section <?php echo $edit; ?>" id="contact">
        <?php echo $contact->GetMarkdown(); ?>
      </div>

    </div>
    <hr>
    <footer>
      <div class="container-fluid text-center <?php echo $edit; ?>" id="footer">
        <p><?php echo $footer->GetMarkdown(); ?></p>
      </div>
    </footer>
    <?php
      include("modals/edit.php");
      include("modals/login.php");
      include("modals/user.php");
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>

  </html>