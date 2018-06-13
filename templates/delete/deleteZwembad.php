<div class="container border_cv">
  <div class="col-md-12">
    <h4>Delete zwembad:</h4>
    <form action="../backend/delete/deleteZwembad.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Selecteer zwembad: </h4>
          </td>
          <td>
            <select class="form-control" name="zwembadDelSelect">
              <option value="" disabled selected></option>
              <?php
              include_once '../backend/dbconnect.php';
                $sqlDelZwembad = "SELECT * FROM zwembad;";
                $resultDelZwembad = mysqli_query($conn, $sqlDelZwembad);
                while ($rowDelZwembad = mysqli_fetch_row($resultDelZwembad)) {
                  echo "<option value='". $rowDelZwembad[0] ."'>" . $rowDelZwembad[1] . "</option>";
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
          <td><button class="form-control" name="zwembadDelSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
