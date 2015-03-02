<?php
session_start();
if (!isset($_SESSION['username']))
{
  header('Location:index.php');
}
?>

<html>
<title>Jarvis </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/home.css">
<link rel="stylesheet" href="assets/button.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="wrapper">
  <div class="header">
    <div class="container">
      <div class="logo">
        JARVIS
      </div>
  </div>
</div>
<div class="main">
    <div class="panel panel-default container">
      <div class="settings">
        <div class="row">
          <div class="question">
            Table lamp
          </div>
          <div class="switch">
            <form id="switchboard" method="post" action="#">
            <input id="cmn-toggle-1" name="l1" class="cmn-toggle cmn-toggle-round" value="1" type="checkbox">
            <label for="cmn-toggle-1"></label>
          </div>
        </div><!-- /row -->

        <div class="row">
          <div class="question">
            Room light
          </div>
          <div class="switch">
            <input id="cmn-toggle-2" name="l2" class="cmn-toggle cmn-toggle-round" value = "1" type="checkbox">
            <label for="cmn-toggle-2"></label>
          </form>
          </div>
        </div><!-- /row -->
      </div>
    </div>
    <div class="panel panel-default container">
      <h2>Request Live Image</h2>
    </div>
  </div><!-- #main -->
</div>
</body>
</html>
