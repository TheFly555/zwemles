<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $deelnameDelSelect = $_POST['deelnameDelSelect'];
  $deelnameDelSubmit = $_POST['deelnameDelSubmit'];

  //if Condition: check if submit button is clicked and redirect
  if (!isset($deelnameDelSubmit)) {
    header("location: ../../templates/deleteIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($deelnameDelSelect)) {
    header("location: ../../templates/deleteIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "DELETE FROM deelname WHERE deelname_id = $deelnameDelSelect;";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/deleteIndex.php?signup=succes");
  }
?>
