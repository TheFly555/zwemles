<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $instructeurSelect = $_POST['instructeurDelSelect'];
  $instructeurDelSubmit = $_POST['instructeurDelSubmit'];

  //if Condition: check if submit button is clicked and redirect
  if (!isset($instructeurDelSubmit)) {
    header("location: ../../templates/deleteIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($instructeurSelect)) {
    header("location: ../../templates/deleteIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "DELETE FROM instructeur WHERE instructeur_code = $instructeurSelect;";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/deleteIndex.php?signup=succes");
  }
?>
