<!doctype html>
<html lang="en">
<head>
    <meta charset="lt">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ticket.view.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/807e7db257.js" crossorigin="anonymous"></script>
    <title>Ticket Preview</title>
</head>
<?php
require "../functions/functions.php";
$item = getData()[$_GET["id"]];
$date = date("F j, Y");
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
    <h4>Patikrinkite savo kelionės informaciją</h4>
        </div>
    </div>
<div class="ticket bg-light">
    <div class="col-12">
    <div class="row">
        <div class="col-4">
 <p class="m-4"><?=$date;?></p>
            <div>
            <p class="m-4"><i class="fas x5 fa-globe-europe"></i>    Manto Oro Linijos</p>
            </div>
        </div>
        <div class="col-2">
        <p class="m-4">From</p>
        <p class="m-4">To</p>
        </div>
        <div class="col-2">
        <p class="m-4"><?=$item['from'];?></p>
        <p class="m-4"><?=$item['to'];?></p>
        </div>

    </div>
    <div class="row">
        <div class="col-2">
            <p>12:20 val.</p>
        </div>
        <div class="col-1">
            <p><i class="fas fa-arrow-right"></i></p>
        </div>
        <div class="col-2">
            <p class="m-0">19:50</p>
        </div>
        <div class="col-5">
            <p>20min/Express/Be stojimu</p>
        </div>
        <div class="col-2">
            <p>Kaina: <?=$item['price'];?>€</p>
        </div>
    </div>
    </div>
</div>
</div>
</body>
</html>