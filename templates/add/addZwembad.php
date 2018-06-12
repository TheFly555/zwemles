<div class="container border_cv">
  <div class="col-md-12">
    <h4>Voeg een zwembad toe:</h4>
    <form action="..\backend\add\addZwembad.php" method="post">
      <table>
        <tr>
          <td>
            <h4>Straatnaam + Nr: </h4>
          </td>
          <td>
            <input class="form-control" type="text" name="zwembadAdres">
          </td>
        </tr>
        <br>
        <tr>
          <td>
            <h4>Plaats: </h4>
          </td>
          <td>
            <input class="form-control" type="text" name="zwembadPlaats">
          </td>
        </tr>
        <tr>
          <td>
            <h4></h4>
          </td>
          <td><button class="form-control" name="zwembadSubmit">Save</button></td>
        </tr>
      </table>
    </form>
  </div>
</div>
