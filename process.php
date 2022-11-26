<?php
  require_once('connection.php');
  if (isset($_POST['Login']))
  {
     if(empty($_POST['name']) || empty($_POST['pass']))
     {
      header("location:index.php");
     }
  }
  else
  {
    $query="SELECT * FROM user WHERE username='".$_POST['name']."' and password='".$_POST['pass']."'";

  }
  ?>