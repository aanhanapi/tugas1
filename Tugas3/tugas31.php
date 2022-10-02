<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil Genap</title>
</head>
<body>

    <!-- Form input angka -->
    <form action="" method="POST">
    Masukkan angka <input type="text" name="bintang" required>
    <input type="submit" name="submit" value="Check" >
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $bil =$_POST['bintang'];

            if($bil %2 == 1){
                for ($a=1; $a <= $bil ; $a++) { 
                    for($b = 1; $b <= $a; $b++){
                     echo"*";
                 }
                 echo "<br>";
                 }
            }else{
                for ($a=1; $a <= $bin ; $a++) { 
                    for($b = 1; $b <= $a; $b++){
                     echo"+";
                 }
                 echo "<br>";
                 }
            }
        }
    ?>
</body>
</html>