<!DOCTYPE html>
<html>
  <?php include_once '__header.php'; ?>
  <body>
    <?php include_once '__nav.php'; ?>
    <center>
    <!-- Content -->
    <!-- alert bar when there is an error -->
    <?php include_once 'errorMessage.php'; ?>
    <!--Include les aanmaken form-->
    <?php include_once 'update\updateStad.php'; ?>
    <br>
    <!--Include Winkel toevoegen form-->
    <?php include_once 'update\updateWinkel.php'; ?>
    <br>
    <!--Include stad wnikel-->
    <?php include_once 'update\updateStadWinkel.php'; ?>
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
