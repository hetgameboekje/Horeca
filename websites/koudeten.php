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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
<?php 
include "navbar.php"
?>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3"><img src="assets/img/gezond.png" width="247" height="236">
                    <p class="fs-2">&nbsp; Gezond&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<i onclick="productClick(0);"
                            class="icon ion-plus"></i>
                    </p>
                </div>
                <div class="col-md-4 col-xl-3"><img width="247" height="236" src="assets/img/hetekip.png">
                    <p class="fs-2">&nbsp; Hete Kip&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(1);"
                            class="icon ion-plus"></i></p>
                </div>
                <div class="col-md-4 col-xl-3"><img src="assets/img/broodjebal.png" style="width: 247px;height: 236px;">
                    <p class="fs-2">&nbsp; Broodje Bal&nbsp; &nbsp;&nbsp;<i onclick="productClick(2);"
                            class="icon ion-plus"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3"><img src="assets/img/broodjebrie.png" width="247" height="236"
                        style="height: 236px;width: 247px;">
                    <p class="fs-2">&nbsp; Broodje Brie&nbsp; &nbsp;<i onclick="productClick(3);"
                            class="icon ion-plus"></i></p>
                </div>
                <div class="col-md-4 col-xl-3"><img src="assets/img/hamkaas.png" width="247" height="236">
                    <p class="fs-2">&nbsp; Ham Kaas&nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(4);"
                            class="icon ion-plus"></i></p>
                </div>
                <div class="col-md-4 col-xl-3"><img src="assets/img/fruitsalade.png" width="247" height="236">
                    <p class="fs-2">&nbsp; Fruit Salade&nbsp; &nbsp;&nbsp;<i onclick="productClick(5);"
                            class="icon ion-plus"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-3"><img src="assets/img/granola.png" width="247" height="236">
                    <p class="fs-2">&nbsp; &nbsp; &nbsp; Yoghurt&nbsp; &nbsp; &nbsp;<i onclick="productClick(6);"
                            class="icon ion-plus"></i></p>
                </div>
                <div class="col-md-4 col-xl-3"><img src="assets/img/granola.png" width="247" height="236">
                    <p class="fs-2">Yoghurt&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i onclick="productClick(7);"
                            class="icon ion-plus"></i>Granola
                    </p>
                </div>
                <div class="col-md-4 col-xl-3"><img src="assets/img/bonensalade.png" width="247" height="236">
                    <p class="fs-2">Bonensalade&nbsp; &nbsp;&nbsp;<i onclick="productClick(8);"
                            class="icon ion-plus"></i></p>
                </div>
            </div>
        </div>


        Dit is je order nummer van kout eten (ke+
        <div id="wmid" onclick="toonwmid();">...</div>
        ) <br>

        Winkelmandje:

        <hr />

        <div id="winkelmandjeId" onclick="toonWinkelmandje();">Winkelmandje producten:</div>
        <br />
        <div onclick="emptyWM()"><b class="buttonwm">Leeg winkelmandje</b></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/koudeten.js"></script>



        



    <?php 
include "footer.php"
?>
</body>

</html>
</body>

</html>