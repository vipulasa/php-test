<?php
    require "bootstrap.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
<div class='container'>
    <h1>PHP TUTORIAL</h1>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
          <li class="active"><a href="/index.php">Home</a></li>
          <li><a href="/index.php?page=about">About</a></li>
          <li><a href="/index.php?page=gallery">Gallery</a></li>
          <li><a href="/index.php?page=contact">Contact</a></li>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
    <div class='span2 sidebar'>
        <h3>Left Sidebar</h3>
        <ul class="nav nav-tabs nav-stacked">
          <li><a href='#'>Another Link 1</a></li>
          <li><a href='#'>Another Link 2</a></li>
          <li><a href='#'>Another Link 3</a></li>
        </ul>
      </div>
      <div class='span8 main'>
       <?php include "pages/". $application['page'] .".php"; ?>
      </div>    
    </div>
  </div>
</body>

</html>