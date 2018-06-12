<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een instructeur toe:</h4>
    <form action="..\backend\add\addInstructeur.php" method="post">
      <table>
        <tr>
          <td>
            <h4>instructeur naam: </h4>
          </td>
          <td>
            <input class="form-control" type="text" name="instructeurNaam">
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4>instructeur telnr: </h4>
          </td>
          <td>
            <input class="form-control" type="number" name="instructeurTelnr" maxlength="10" >
          </td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="instructeurSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
