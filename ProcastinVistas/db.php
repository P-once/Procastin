<?php 
  //connexion a db
  $db = mysqli_connect('localhost', 'root', '', 'procastin');

  if(!$db) {
    die("Connection error");
  }

?> 