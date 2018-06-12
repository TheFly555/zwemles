<?php
  //include database connect file
  include_once '../dbconnect.php';

  //Constanten
  $updateStad = $_POST['selectStadUpdate'];
  $newstadName = $_POST['newStadNaam'];
  $newPopulatie = $_POST['newPopulatie'];

  //SQL count number of rows voor Stad
  $sqlSelectStad = "SELECT * FROM stad WHERE naam = '$newstadName';";
  $result = mysqli_query($conn, $sqlSelectStad);
  $rowCount = mysqli_num_rows($result);

  //if Condition: check if submit button is clicked and redirect
  if (!isset($_POST['submitUpdateStad'])) {
    header("location: ../../templates/updateIndex.php?signup=error");
  }
  //Elseif Condition: check if an input is empty and redirect
  elseif (empty($newstadName) || empty($newstadName) || empty($updateStad)) {
    header("location: ../../templates/updateIndex.php?signup=empty");
  }
  //Elseif Condition: valid characters check and redirect
  elseif (!preg_match("/^[ a-zA-Z-]*$/", $newstadName)) {
    header("location: ../../templates/updateIndex.php?signup=unvalidCharacters");
  }
  //Elseif Condition: double data check and redirect
  elseif ($rowCount >= 1) {
    header("location: ../../templates/updateIndex.php?signup=dubbleUpdateStad");
  }
  //Else condition: Add entry to the database
  else{
    $sqlInsert = "UPDATE stad SET naam = '$newstadName', populatie = $newPopulatie WHERE naam = '$updateStad'";
    mysqli_query($conn, $sqlInsert);
    header("location: ../../templates/updateIndex.php?signup=succes");
  }
?>
