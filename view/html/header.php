<?php
if (!isset($_SESSION["islogged"]))
    session_start();
if (!isset($_GLOBALS["check_path"]))
    require_once("../../config/path.inc.php");
require_once($_GLOBALS["in_path"] . "controller/function_AutoLoad.php");
// require_once($_GLOBALS["path"]."/controller/accessController.php");

/* if (!accessController()){
  header("Location:login.php");
  } */
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo $_GLOBALS["re_path"]; ?>libs/bootstrap/css/bootstrap.min.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="<?php echo $_GLOBALS["re_path"]; ?>libs/jquery/jquery-1.12.2.min.js"></script>
        <script src="<?php echo $_GLOBALS["re_path"]; ?>libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $_GLOBALS["re_path"]; ?>libs/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo $_GLOBALS["re_path"]; ?>view/js/comboBox.js" type="text/javascript"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">

        <link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
        <link href="<?php echo $_GLOBALS["re_path"]; ?>view/css/styles.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_GLOBALS["re_path"]; ?>libs/jquery-ui/jquery-ui.css" rel="stylesheet" type="text/css">
        <title><?php echo $name; ?></title>
    </head>
    <body>
        <?php
        if (isset($_SESSION["islogged"]) && $_SESSION["islogged"] == true) {
            include_once($_GLOBALS["in_path"] . "view/html/navbar.php");
        }
        ?>
