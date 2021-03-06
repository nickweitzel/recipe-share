<?php
  session_start();
 ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="stylesheet" type="text/css" href="styles/style.css" />
  <link rel="stylesheet" media="print" type="text/css"
        href="styles/print.css" />
  <title>The Recipe Center</title>
</head>

<body>
  <div id="header">
    <?php include("inc/header.inc.php"); ?>
  </div>
  <div id="content">
    <div id="nav">
      <?php include("inc/nav.inc.php"); ?>
    </div>
    <div id="main">
      <?php
        if (!isset($_REQUEST['content'])) {
          include("inc/main.inc.php");
        } else {
          $content = $_REQUEST['content'];
          $nextpage = "inc/" . $content . ".inc.php";
          include($nextpage);
        } // end if/else
       ?>
    </div>
    <div id="news">
      <?php include("inc/news.inc.php") ?>
    </div>
  </div>
  <div id="footer">
    <?php include("inc/footer.inc.php"); ?>
  </div>
</body>

</html>
