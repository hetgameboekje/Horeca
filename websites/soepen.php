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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body>
  
<?php 
include "navbar.php"
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-17.png" width="247" height="236">
                <p class="fs-2">&nbsp;Tomaten soep&nbsp;&nbsp;<i onclick="productClick(0);" class="icon ion-plus"></i></p>
            </div>
            <div class="col-md-4 col-xl-3"><img width="247" height="236" src="assets/img/clipboard-image-18.png">
                <p class="fs-2">&nbsp;Groente soep&nbsp; &nbsp;&nbsp;<i onclick="productClick(1);" class="icon ion-plus"></i></p>
            </div>
            <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-19.png"
                    style="width: 247px;height: 236px;">
                <p class="fs-2">Champignon&nbsp; &nbsp;&nbsp;<i onclick="productClick(2);" class="icon ion-plus"></i><br>soep</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-20.png" width="247" height="236"
                    style="height: 236px;width: 247px;">
                <p class="fs-2">&nbsp;Erwten soep&nbsp; &nbsp; &nbsp;<i onclick="productClick(3);" class="icon ion-plus"></i></p>
            </div>
            <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-21.png" width="247" height="236">
                <p class="fs-2">&nbsp;Wortel soep&nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(4);" class="icon ion-plus"></i></p>
            </div>
            <div class="col-md-4 col-xl-3"><img src="assets/img/clipboard-image-22.png" width="247" height="236">
                <p class="fs-2">&nbsp; Kippen soep&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(5);" class="icon ion-plus"></i></p>
            </div>
        </div>
        <div class="row"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


</div>
Dit is je order nummer van soepen (SP +
<div id="wmid" onclick="toonwmid();">...</div>
) <br>

Winkelmandje:
<hr />
<div id="winkelmandjeId" onclick="toonWinkelmandje();">Winkelmandje producten:</div>
<br />
<div onclick="emptyWM()"><b class="buttonwm">Leeg winkelmandje</b></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</div>

<script src="assets/js/soepen.js"></script>

<?php 
include "footer.php"
?>



    
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>