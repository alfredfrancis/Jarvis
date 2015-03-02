<?php
session_start();
header('Cache-control: private');
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
$uname="alfred";
$pwd="jarvis";
$error=NULL;
$cookie_name = 'siteAuth';
$cookie_time = (3600 * 24 * 30);
if(isSet($_COOKIE[$cookie_name]))
{
    parse_str($_COOKIE[$cookie_name]);
    if(($usr == $uname) && ($hash == md5($pwd)))
    {
        $_SESSION['username'] = $usr;
    }
}

if (isset($_SESSION['username']))
{
  header('Location:home.php');
}
else if (isset($_POST['username'])&isset($_POST['password']))
{
    if($_POST['username']=="alfred" && $_POST['password']=="jarvis")
    {
      $_SESSION['username'] = $_POST['username'];
      if($_POST['rememberme'] == 1)
      {
        $password_hash = md5($_POST['password']);
        setcookie ($cookie_name, 'usr='.$_POST['username'].'&hash='.$password_hash, time() + $cookie_time);
      }
      header('Location:home.php');
    }
    else{
      $error="Incorrect credentials/Try Again";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Jarvis </title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/index.css">
   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
</head>
<body>
<div class="wrapper">

          <form class="form-signin" method ="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
            <h1 class="main-welcome">You reached Jarvis's,</h1>
            <label for="username" class="sr-only">Email address</label>
            <input type="username" name="username" class="form-control" placeholder="User Name" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <?php
             if($error!=NULL)
             {?>
               <div class="alert alert-danger" role="alert">
                 <?php echo $error;?>
              </div>
               <?php } ?>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="rememberme" value="1"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connect</button>
          </form>
</div> <!-- /container -->
</body>
</html>
