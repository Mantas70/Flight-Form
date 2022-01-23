<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Shop</title>
</head>
    <?php require "../functions/functions.php" ?>
<body>
    <?php
    $location = ["Kaunas", "Vilnius", "Ispanija", "Olandija", "Madridas"];
    $weight = [0, 10, 15, 20, 25, 30, 35, 40];
    $flightIDS = [1564848,1561845,1561812,5189498,1564897];

    if(!empty($_POST)) {
        validate($_POST);
        if(empty($validationErrors)){
            saveMessage($_POST);
            echo "<div class='alert alert-success'>Bilietas sekmingai issaugotas</div>";
        }else {
            foreach ($validationErrors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
    }
    ?>
    <?php if($validationErrors || empty($_POST)):?>
    <div class="container">
        <h3>Flight Form</h3>
        <form method="post">
            <div class="form-group">
                <div class="mb-3">
                  <label for="flightID">Flight Id.</label>
                    <select name="flightIDs" class="form-select">
                        <option selected disabled>---Jusu Skrydzio numeris---</option>
                    <?php foreach ($flightIDS as $key =>$id):?>
                    <option value="<?=$id;?>"><?=$id?></option>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="PersonalID">Iveskite savo Asmens Koda</label>
                    <input type="text" class="form-control" name="PersonalID">
                </div>
                <div class="mb-3">
                    <label for="lname">Iveskite Varda</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="name">Iveskite Pavarde</label>
                    <input type="text" class="form-control" name="lname">
                </div>
                <div class="mb-3">
                    <label for="from">Is kur skrendate?</label>
                    <select name="from" class="form-select">
                        <option selected disabled>---Pasirinkite Sali---</option>
                        <?php foreach($location as $key => $locations):?>
                        <option value="<?=$locations;?>"><?=$locations;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="to">I kur skrendate?</label>
                    <select name="to" class="form-select">
                        <option selected disabled>---Pasirinkite Sali---</option>
                        <?php foreach($location as $key => $locations):?>
                            <option value="<?=$locations;?>"><?=$locations;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price">Iveskite Kaina (Eur)</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="weight">Bagazo Svoris (kg)</label>
                    <select class="form-select" name="weight">
                            <option selected disabled>---Pasirinkite Svori---</option>
                        <?php foreach ($weight as $key => $weights):?>
                        <option value="<?=$weights?>"><?=$weights?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <textarea cols="10" rows="10" class="form-control" placeholder="Jusu Pastabos" name="message"></textarea>
                </div>
                <div class="mb-3 flex-end">
                    <button class="btn btn-success" type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
        <?php else:?>
            <div class="card card-body justify-content-center">
                <a href="ticketBuy.view.php" class="btn btn-success mt-1">New Flight</a>
                <a href="flights.view.php" class="btn btn-success mt-1">All Flights</a>
            </div>
        <?php endif;?>
    </div>
</body>
</html>