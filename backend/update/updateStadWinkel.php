<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $updateStad = $_POST['selectStadUpdate'];
  $newstadName = $_POST['newWinkelName'];
  $newPopulatie = $_POST['newWinkelId'];

  //SQL count number of rows: wnkel_naam
  $sqlSelectWinkel = "SELECT * FROM winkel WHERE winkel_naam = '$winkel';";
  $resultWinkelNaam = mysqli_query($conn, $sqlSelectWinkel);
  $rowCountWinkelNaam = mysqli_num_rows($resultWinkelNaam);

  //SQL count number of rows: wnkel_id
  $sqlSelectWinkelId = "SELECT * FROM winkel WHERE winkel_id = '$winkel_id';";
  $resultWinkelid = mysqli_query($conn, $sqlSelectWinkelId);
  $rowCountWinkelid = mysqli_num_rows($resultWinkelid);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitUpdateStad'])) {
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
    $sqlInsert = "UPDATE stad SET naam = '$newstadName', populatie = $newPopulatie WHERE naam = '$updateStad'";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/updateIndex.php?signup=succes");
  }
?>
