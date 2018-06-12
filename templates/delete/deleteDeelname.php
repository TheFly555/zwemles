<div class="container border_cv">
  <div class="col-md-12">
    <h4>verwijder iemand uit de les:</h4>
    <form action="../backend/add/addDeelname.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer deelname: </h4>
          </td>
          <td>
            <select class="form-control" name="deelnameLes">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlSelectInstructeur = "SELECT deelname.leerlingnr, leerling.leerling_naam FROM deelname INNER JOIN leerling ON deelname.leerlingnr = leerling.leerlingnr;";
                $resultSelectInstructeur = mysqli_query($conn, $sqlSelectInstructeur);
                while ($rowSelectInstructeur = mysqli_fetch_row($resultSelectInstructeur)) {
                  echo "<option value='". $rowSelectInstructeur[0] ."'>". "les: " . $rowSelectInstructeur[0] . " - " . $rowSelectInstructeur[1] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="deelnameSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
