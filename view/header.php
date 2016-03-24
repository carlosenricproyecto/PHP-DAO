<?php
  //require_once("../controller/accessController.php");
  require_once("../controller/function_AutoLoad.php");
  session_start();
  /*if (!accessController()){
    header("Location:login.php");
  }*/
  $garage=unserialize($_SESSION["garage"]);
  $name=$garage->getName();
?>

<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      <LINK rel="stylesheet" type="text/css" href="css/styles.css" />
  <title><?php echo $name; ?></title>
</head>
<body>
  <div class="page-header text-center">
    <h1><?php echo $name; ?><small> Best Garage Ever</small></h1>
  </div>


<?php
if (isset($_SESSION["islogged"]) && $_SESSION["islogged"]==true){
  require_once("navbar.php");
}
 ?>
