<?php
  $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  //If condition: Alert box if not everythting is filled in
  if (strpos($fullUrl, "signup=empty") == true) {
    echo "<p class='alertText'>Je hebt niet alles ingevuld.</p> ";
  }
  //elseIf condition: Alert box dubble combo: stad_id and winkel_id in table: stad_winkel
  elseif (strpos($fullUrl, "signup=dubbleDataDeelname") == true) {
    echo "<p class='alertText'>Deze leerling zit al in de les</p> ";
  }
  //elseIf condition: Alert box if not used the form
  elseif (strpos($fullUrl, "signup=error") == true) {
    echo "<p class='alertText'>Je hebt geen formulier ingevuld.</p> ";
  }
  //elseIf condition: Succes box if everything is valid and the entry is added
  elseif (strpos($fullUrl, "signup=succes") == true) {
    echo "<p class='succesText'>Succesvol toegevoegd.</p> ";
  }
 ?>
