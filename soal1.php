<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <form action="" method="POST">
    <label>Input : </label>
    <input type="text" name="masukan" value=""><br>
    <input type="submit" name="input" value="input">
    </form>
    <br><br><br>
    <?php
    if(isset($POST['input'])){
        $masukan = $POST['masukan'];
    }
    ?>
    
</body>
</html>