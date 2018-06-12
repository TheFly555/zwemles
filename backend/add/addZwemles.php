<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $lesDiploma = $_POST['lesDiploma'];
  $lesDate = $_POST['lesDate'];
  $lesInstructeur = $_POST['lesInstructeur'];
  $lesZwembad = $_POST['lesZwembad'];
  $lesSubmit = $_POST['lesSubmit'];

  //if Condition: check if submit button is clicked and redirect
  if (!isset($lesSubmit)) {
    header("location: ../../templates/addIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($lesDiploma) || empty($lesDate) || empty($lesInstructeur) || empty($lesZwembad)) {
    header("location: ../../templates/addIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO zwemles (instructeur_code, zwembad_id, diploma, datumtijd)
     VALUES ('$lesInstructeur', '$lesZwembad', '$lesDiploma', '$lesDate');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/addIndex.php?signup=succes");
  }
?>
