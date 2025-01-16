
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <h1>
        <?php
         
        define ("gaji",5000000);
        define ("bonus",500000);
        define ("pajak",0.12);

        $jumlahproyek = 2;

        $totalpendapatan = gaji + (bonus*$jumlahproyek);
        $gajibersih = $totalpendapatan - ($totalpendapatan*pajak);

        echo "gaji pendapatan yang anda peroleh 5000000";
        echo "<br>";
        echo "total pendapatan adalah " .$totalpendapatan;
        echo "<br>";
        echo "total gaji bersih adalah " .$gajibersih;

             ?>
    </h1>
        
</body>
</html>