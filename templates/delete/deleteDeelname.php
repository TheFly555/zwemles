<div class="container border_cv">
  <div class="col-md-12">
    <h4>Delete persoon uit de les:</h4>
    <form action="../backend/delete/deleteDeelname.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer deelname: </h4>
          </td>
          <td>
            <select class="form-control" name="deelnameDelSelect">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlDelDeelname = "SELECT deelname.deelname_id, deelname.lescode, deelname.leerlingnr, leerling.leerling_naam FROM deelname INNER JOIN leerling ON deelname.leerlingnr = leerling.leerlingnr;";
                $resultDelDeelname = mysqli_query($conn, $sqlDelDeelname);
                while ($rowDelDeelname = mysqli_fetch_row($resultDelDeelname)) {
                  echo "<option value='". $rowDelDeelname[0] ."'>". "les: " . $rowDelDeelname[1] . " - " . $rowDelDeelname[3] . "</option>";
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
          <td><button class="form-control" name="deelnameDelSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
