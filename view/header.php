<?php
  //require_once("../controller/accessController.php");
  require_once("../controller/function_AutoLoad.php");
  if (!isset($_SESSION["garage"])) session_start();
  /*if (!accessController()){
    header("Location:login.php");
  }*/
  $name="Dr. Sayos Garage";
?>

<html>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
  
  <script src="../libs/jquery/jquery-1.12.2.min.js"></script>
  <script src="../libs/bootstrap/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
  <link href="css/styles.css" rel="stylesheet" type="text/css">
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
