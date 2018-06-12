<div class="container border_cv">
  <div class="col-md-12">
    <h4>Maak een deelname aan:</h4>
    <form action="../backend/add/addDeelname.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer les: </h4>
          </td>
          <td>
            <select class="form-control" name="deelnameLes">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlSelectInstructeur = "SELECT * FROM zwemles;";
                $resultSelectInstructeur = mysqli_query($conn, $sqlSelectInstructeur);
                while ($rowSelectInstructeur = mysqli_fetch_row($resultSelectInstructeur)) {
                  echo "<option value='". $rowSelectInstructeur[0] ."'>". "les: " . $rowSelectInstructeur[0] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4>Selecteer leerling: </h4>
          </td>
          <td>
            <select class="form-control" name="deelnameLeerling">
              <option value="" disabled selected></option>
              <?php
              // include_once '../backend/dbconnect.php';
                $sqlSelectzwembad = "SELECT * FROM leerling;";
                $resultSelectzwembad = mysqli_query($conn, $sqlSelectzwembad);
                while ($rowSelectzwembad = mysqli_fetch_row($resultSelectzwembad)) {
                  echo "<option value='". $rowSelectzwembad[0] ."'>". $rowSelectzwembad[2] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
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
