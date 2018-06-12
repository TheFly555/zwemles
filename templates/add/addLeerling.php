<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een leerling toe:</h4>
    <form action="..\backend\add\addLeerling.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Leerling naam: </h4>
          </td>
          <td>
            <input class="form-control" type="text" name="leerlingNaam">
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4>Geboorte datum: </h4>
          </td>
          <td>
            <input class="form-control" type="date" name="LeerlingGeboortedatum">
          </td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="leerlingSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
