<div class="container border_cv">
  <div class="col-md-12">
    <h4>Maak een les aan:</h4>
    <form action="../backend/add/addZwemles.php" method="post">
      <table>
        <tr>
          <td>
            <h4>diploma:</h4>
          </td>
          <td>
            <select class="form-control" name="lesDiploma">
              <option></option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <h4>datum:</h4>
          </td>
          <td><input class="form-control" type="date" name="lesDate" placeholder="date"></td>
        </tr>
        <tr>
          <td>
            <h4>instructeur: </h4>
          </td>
          <td>
            <select class="form-control" name="lesInstructeur">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlSelectInstructeur = "SELECT * FROM instructeur;";
                $resultSelectInstructeur = mysqli_query($conn, $sqlSelectInstructeur);
                while ($rowSelectInstructeur = mysqli_fetch_row($resultSelectInstructeur)) {
                  echo "<option value='". $rowSelectInstructeur[0] ."'>". $rowSelectInstructeur[1] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4>zwembad: </h4>
          </td>
          <td>
            <select class="form-control" name="lesZwembad">
              <option value="" disabled selected></option>
              <?php
              // include_once '../backend/dbconnect.php';
                $sqlSelectzwembad = "SELECT * FROM zwembad;";
                $resultSelectzwembad = mysqli_query($conn, $sqlSelectzwembad);
                while ($rowSelectzwembad = mysqli_fetch_row($resultSelectzwembad)) {
                  echo "<option value='". $rowSelectzwembad[0] ."'>". $rowSelectzwembad[1] . " - " . $rowSelectzwembad[2] . "</option>";
                }
                ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="lesSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
