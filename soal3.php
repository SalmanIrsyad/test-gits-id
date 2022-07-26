<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <h3>Masukan Data</h3>
    <form action="" method="POST">
        <label>Masukan Input</label>
        <input type="text" name="huruf" value=""><br>
        <input type="submit" name="input" value="Input">
    </form>
    <br><br><br>
    <?php 
    if(isset($_POST['input'])){
        $huruf = $_POST['huruf'];

        echo "<h3>Hasil Output</h3>";
        echo "Input : ".['huruf'];
    }
    ?>
</body>
</html>