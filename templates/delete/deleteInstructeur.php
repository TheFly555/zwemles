<div class="container border_cv">
  <div class="col-md-12">
    <h4>Delete instructeur:</h4>
    <form action="../backend/delete/deleteInstructeur.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer instructeur: </h4>
          </td>
          <td>
            <select class="form-control" name="instructeurDelSelect">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlDelInstructeur = "SELECT * FROM instructeur;";
                $resultDelInstructeur = mysqli_query($conn, $sqlDelInstructeur);
                while ($rowDelInstructeur = mysqli_fetch_row($resultDelInstructeur)) {
                  echo "<option value='". $rowDelInstructeur[0] ."'>" . $rowDelInstructeur[1] . "</option>";
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
          <td><button class="form-control" name="instructeurDelSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
