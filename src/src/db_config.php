<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpassword = '';
  $dbdefault = 'base_104';
  $dbport = '3306';

  $sqlcon = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbdefault, $dbport); 

  if($sqlcon->connect_error){
    die("Falha na conexão com o banco de dados: " . $sqlcon->connect_error);
  }
?>