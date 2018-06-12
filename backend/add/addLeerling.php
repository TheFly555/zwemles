<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $leerlingNaam = $_POST['leerlingNaam'];
  $LeerlingGeboortedatum = $_POST['LeerlingGeboortedatum'];
  $leerlingSubmit = $_POST['leerlingSubmit'];


  //if Condition: check if submit button is clicked and redirect
  if (!isset($leerlingSubmit)) {
    header("location: ../../templates/addIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($leerlingNaam) || empty($LeerlingGeboortedatum)) {
    header("location: ../../templates/addIndex.php?signup=empty");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO leerling (leerling_naam, geboortedatum)
     VALUES ('$leerlingNaam', '$LeerlingGeboortedatum');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/addIndex.php?signup=succes");
  }
?>
