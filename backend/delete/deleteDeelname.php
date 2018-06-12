<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $deelnameLes = $_POST['deelnameLes'];
  $deelnameLeerling = $_POST['deelnameLeerling'];
  $deelnameSubmit = $_POST['deelnameSubmit'];

  //SQL count number of rows voor Deelname
  $sqlDeelname = "SELECT * FROM deelname WHERE lescode = $deelnameLes AND leerlingnr = $deelnameLeerling;";
  $resultDeelnames = mysqli_query($conn, $sqlDeelname);
  $rowCountDeelname = mysqli_num_rows($resultDeelnames);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($deelnameSubmit)) {
    header("location: ../../templates/addIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($deelnameLes) || empty($deelnameLeerling)) {
    header("location: ../../templates/addIndex.php?signup=empty");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountDeelname >= 1) {
    header("location: ../../templates/addIndex.php?signup=dubbleDataDeelname");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "INSERT INTO deelname (lescode, leerlingnr)
     VALUES ('$deelnameLes', '$deelnameLeerling');";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/addIndex.php?signup=succes");
  }
?>
