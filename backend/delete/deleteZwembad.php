<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $zwembadDelSelect = $_POST['zwembadDelSelect'];
  $zwembadDelSubmit = $_POST['zwembadDelSubmit'];

  //if Condition: check if submit button is clicked and redirect
  if (!isset($zwembadDelSubmit)) {
    header("location: ../../templates/deleteIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($zwembadDelSelect)) {
    header("location: ../../templates/deleteIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "DELETE FROM zwembad WHERE zwembad_id = $zwembadDelSelect;";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/deleteIndex.php?signup=succes");
  }
?>
