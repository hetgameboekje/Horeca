<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <style>
    I:hover {
      cursor: pointer;
    }
  </style>

</head>

<body>

<?php 
include "navbar.php"
?>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xl-3"><img src="assets/img/doner-kebab-3-1080x960.jpg" width="247" height="236">
          <p class="fs-2">&nbsp; broodje döner&nbsp;<i onclick="productClick(0);" class="icon ion-plus"></i></p>
        </div>
        <div class="col-md-4 col-xl-3"><img width="247" height="236" src="assets/img/clipboard-image-13.png">
          <p class="fs-2">&nbsp;broodje ham&nbsp; &nbsp; &nbsp;<i onclick="productClick(1);" class="icon ion-plus"></i>
          </p>
        </div>
        <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-14.png" style="width: 247px;height: 236px;">
          <p class="fs-2">&nbsp; broodje worst&nbsp;&nbsp;<i onclick="productClick(2);" class="icon ion-plus"></i></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-11.png" width="247" height="236"
            style="height: 236px;width: 247px;">
          <p class="fs-2">&nbsp;broodje omelet&nbsp;<i onclick="productClick(3);" class="icon ion-plus"></i></p>
        </div>
        <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-15.png" width="247" height="236">
          <p class="fs-2">broodje shoarma&nbsp;<i onclick="productClick(4);" class="icon ion-plus"></i></p>
        </div>
        <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-16.png" width="247" height="236">
          <p class="fs-2">&nbsp; hete kip&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(5);"
              class="icon ion-plus"></i>
          </p>
        </div>
      </div>
      <div class="row"></div>
    </div>

    Dit is je order nummer van warmebroodje (WB+
    <div id="wmid" onclick="toonwmid();">...</div>
    ) <br>

    Winkelmandje:
    <hr />
    <div id="winkelmandjeId" onclick="toonWinkelmandje();">Winkelmandje producten:</div>
    <br />
    <div onclick="emptyWM()"><b class="buttonwm">Leeg winkelmandje</b></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>



  <?php 
include "footer.php"
?>
</body>

</html>