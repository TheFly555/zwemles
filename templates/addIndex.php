<!DOCTYPE html>
<html>
  <?php include_once '__header.php'; ?>
  <body>
    <?php include_once '__nav.php'; ?>
    <center>
    <!-- Content -->
    <!-- alert bar when there is an error -->
    <?php include_once 'errorMessage.php'; ?>
    <!--Include Stad toevoegen form-->
    <?php include_once 'add/addZwemles.php'; ?>
    <br>
    <!--include Deelname toevoegen form-->
    <?php include_once 'add/addDeelname.php'; ?>
    <br>
    <!--Include leerling toevoegen form-->
    <?php include_once 'add/addleerling.php'; ?>
    <br>
    <!--Include inspecteur toevoegen form-->
    <?php include_once 'add/addInstructeur.php'; ?>
    <br>
    <!--Include zwembad toevoegen form-->
    <?php include_once 'add/addZwembad.php'; ?>
    <br>
    </center>
    <script>
    $(document).ready(function () {
      setTimeout(function() {
        $('.succesText').slideUp("slow");
        }, 5000);
      });

      $(document).ready(function () {
        setTimeout(function() {
          $('.alertText').slideUp("slow");
          }, 5000);
        });
    </script>
  </body>
</html>
