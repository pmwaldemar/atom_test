<?php // From head
$baseUrl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<html>
  <link rel="stylesheet" href="<?php echo $baseUrl . "/includes/css/style.css" ;?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="<?php echo $baseUrl . "/includes/js/main.js" ;?>"></script>
  <head>
  </head>
    <body>
      <main class="content-main">

        <?php include __DIR__ . "/header-slider.php" ?>

        <div class="content-wrapper">
