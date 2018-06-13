<div class="container border_cv">
  <div class="col-md-12">
    <h4>Delete leerling:</h4>
    <form action="../backend/delete/deleteLeerling.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer leerling: </h4>
          </td>
          <td>
            <select class="form-control" name="leerlingDelSelect">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlDelLeerling = "SELECT * FROM leerling;";
                $resultDelLeerling = mysqli_query($conn, $sqlDelLeerling);
                while ($rowDelLeerling = mysqli_fetch_row($resultDelLeerling)) {
                  echo "<option value='". $rowDelLeerling[0] ."'>" . $rowDelLeerling[2] . "</option>";
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
          <td><button class="form-control" name="leerlingDelSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
