<?php include_once "../backend/dbconnect.php"; ?>
<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een stad toe aan de database:</h4>
    <form action="../backend/update/updateStad.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Winkel die je wil updaten:</h4>
          </td>
          <td>
            <select class="form-control" name="selectWinkelUpdate">
              <option value="" disabled selected></option>
              <?php
                $sqlSelectStad = "SELECT * FROM winkel;";
                $resultSelectStad = mysqli_query($conn, $sqlSelectStad);
                while ($rowSelectStad = mysqli_fetch_row($resultSelectStad)) {
                  echo "<option value='". $rowSelectStad[1] ."'>". $rowSelectStad[1] . " - " . $rowSelectStad[0] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2"><center><h4>veranderen in:</h4></center></td>
        </tr>
        <tr>
          <td>
            <h4>Winkel:</h4>
          </td>
          <td><input class="form-control" type="text" name="newWinkelName" placeholder="Stad"></td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="submitUpdateWinkel">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
