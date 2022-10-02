<html>
    <head>
        <title> Tugas Mengihtung Bangun Datar </title>
    </head>
    <body>
       <h1> Menghitung Luas Bangun Datar </h1>
        <form method="POST" action="">
        Masukkan Angka 1 <input type="text" name="angka1" required> <br/>
        Masukkan Angka 2 <input type="text" name="angka2" required> <br/>
        <hr size=1px>

        Pilih Bangun Datar : <br />
        <input type="radio" name="bangun" value="A"> Luas Segitiga <br />
        <input type="radio" name="bangun" value="B"> Luas Persegi Panjang <br />
        <input type="submit" value="simpan" />
        <input type="reset" value="reset" />
        </form>
        <hr size=1px>
        <?php
           $bangun=$_POST['bangun'];
           $angka1    =$_POST['angka1'];
           $angka2      =$_POST['angka2'];
            switch($bangun)
            {
                case "A" : {
                   
                       $alas=$angka1;
                        $tinggi=$angka2;
                        echo "Luas Segitiga =".$alas * $tinggi /2;
                }  
                break;
                case "B" : {
                    $panjang=$angka1;
                    $lebar=$angka2;
                    echo "Luas Persegi Panjang=" .$panjang * $lebar;
                }
                break;
                default: {echo "hemm anda belum menentukan pilihan";}
                break;
             }
          ?>
    </body>
</html>

