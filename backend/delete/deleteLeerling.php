<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $leerlingDelSelect = $_POST['leerlingDelSelect'];
  $leerlingDelSubmit = $_POST['leerlingDelSubmit'];

  //if Condition: check if submit button is clicked and redirect
  if (!isset($leerlingDelSubmit)) {
    header("location: ../../templates/deleteIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($leerlingDelSelect)) {
    header("location: ../../templates/deleteIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "DELETE FROM leerling WHERE leerlingnr = $leerlingDelSelect;";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/deleteIndex.php?signup=succes");
  }
?>
