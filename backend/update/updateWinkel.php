<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $updateWinkel = $_POST['selectWinkelUpdate'];
  $newWinkelName = $_POST['newWinkelName'];

  //SQL count number of rows: wnkel_naam
  $sqlSelectWinkel = "SELECT * FROM winkel WHERE winkel_naam = '$winkel';";
  $resultWinkelNaam = mysqli_query($conn, $sqlSelectWinkel);
  $rowCountWinkelNaam = mysqli_num_rows($resultWinkelNaam);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitUpdateWinkel'])) {
    header("location: ../../templates/updateIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($newstadName) || empty($newstadName) || empty($updateStad)) {
    header("location: ../../templates/updateIndex.php?signup=empty");
  }
  //Elseif Condition: valid characters check and redirect
  elseif (!preg_match("/^[a-z]*$/", $winkel_id) || !preg_match("/^[ a-zA-Z-]*$/", $newstadName)) {
    header("location: ../../templates/updateIndex.php?signup=unvalidCharacters");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountWinkelNaam >= 1) {
    header("location: ../../templates/addIndex.php?signup=dubbleDataWinkel");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCountWinkelid >= 1) {
    header("location: ../../templates/addIndex.php?signupdubbleDataId");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "UPDATE winkel SET winkel_naam = '$newWinkelName' WHERE winkel_naam = '$updateWinkel'";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/updateIndex.php?signup=succes");
  }
?>
