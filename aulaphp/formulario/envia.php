<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>dados preenchidos:</h1>
    <ul>
        <?php foreach ($_POST as $tacchini => $valor){ ?> 
            <li>
                <strong>
                    <?php echo $tacchini; ?>

                </strong>
                <?php echo $valor; ?>
            </li>



         <?php } ?>
    </ul>

    
</body>
</html>