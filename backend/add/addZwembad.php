<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $zwembadAdres = $_POST['zwembadAdres'];
  $zwembadPlaats = $_POST['zwembadPlaats'];
  $zwembadSubmit = $_POST['zwembadSubmit'];


  //if Condition: check if submit button is clicked and redirect
  if (!isset($zwembadSubmit)) {
    header("location: ../../templates/addIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($zwembadAdres) || empty($zwembadPlaats)) {
    header("location: ../../templates/addIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO zwembad (adres, plaats)
     VALUES ('$zwembadAdres', '$zwembadPlaats');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/addIndex.php?signup=succes");
  }
?>
