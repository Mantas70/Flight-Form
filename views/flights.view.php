<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php require "../functions/functions.php"?>
<body>
<table class="table table-bordered table-striped">
    <tr>
       <th>Vardas</th>
        <th>Pavarde</th>
        <th>Skrydzio Nr.</th>
        <th>Isvykimo vieta</th>
        <th>Atvykimo vieta</th>
        <th>Kaina (Eur)</th>
        <th>Bagazo Svoris (kg)</th>
        <th>Pastabos</th>
        <th>Bilietas</th>
    </tr>
    <?php foreach(getData() as $key=>$data): ?>
    <tr>
        <td><?=$data["name"]?></td>
        <td><?= $data["lname"]?></td>
        <td><?= $data["flightIDs"]?></td>
        <td><?= $data["from"]?></td>
        <td><?= $data["to"]?></td>
        <td><?= $data["price"]?></td>
        <td><?= $data["weight"]?></td>
        <td><?=$data["message"]?></td>
        <td><a href="ticket.view.php?id=<?=$key;?>" class="w-auto btn btn-success">Bilietas</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>