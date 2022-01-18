<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ticket Preview</title>
</head>
    <?php require "../functions/functions.php"; ?>
<body>
<?php foreach(getData() as $id=>$ticket): ?>
    <div class="container">
        <table class="table table-bordered table striped">
            <?php foreach(getData() as $list):?>
                <tr>

                    <?php $list = explode(',', $list);?>
                    <?php foreach ($list as $item):?>

                        <?php if(!empty($item)):?>
                            <td><?=$item;?></td>
                        <?php endif;?>
                    <?php endforeach;?>
                </tr>
            <?php endforeach;?>
        </table>
    </div>
<?php endforeach;?>
</body>
</html>