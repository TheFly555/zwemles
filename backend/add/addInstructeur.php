<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $instructeurNaam = $_POST['instructeurNaam'];
  $instructeurTelnr = $_POST['instructeurTelnr'];
  $instructeurSubmit = $_POST['instructeurSubmit'];


  //if Condition: check if submit button is clicked and redirect
  if (!isset($instructeurSubmit)) {
    header("location: ../../templates/addIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($instructeurNaam) || empty($instructeurGeboortedatum)) {
    header("location: ../../templates/addIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO instructeur (instructeur, telnr_instr)
     VALUES ('$instructeurNaam', '$instructeurTelnr');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/addIndex.php?signup=succes");
  }
?>
