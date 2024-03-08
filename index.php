<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vezérlési szerkezetek</title>
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo "<h2>Véletlen számok</h2>";
        // A függvényeket fűzzük a szöeghez!
        echo "Paraméter nélküli véletlen szám: ".rand(). "<br>";
        echo "A véletlen szám maximuma: ".getrandmax(). "<br>";
        echo "Zárt intervallumbeli véletlen szám: ".rand(10, 20). "<br>";
        echo "<h2>Globális változók</h2>";
        $x = 7;
        $y = 6;
            
        function myTest0() {
            $x = 1;
            $y = 2;
            // Kezdőérték nélkül nem működik:
            $z = $x + $y;
            echo "A (lokális változók) $x és a $y összege: $z<br>";
            // Működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A (globális változók) " .$GLOBALS['x']. " és a " .$GLOBALS['y']. " összege: " .$GLOBALS['z'];
        }
        myTest0();
        echo "<h2>Operátorok</h2>";
        $adat1 = 8/3;
        echo "8/3 eredménye: $adat1<br>";
        echo "8/3 adattípusa: " .gettype($adat1)."<br>";
        echo "<h2>Elágazások</h2>";
        $logikai = (5 == 0);
        echo "5 egyenlő-e 0-val?<br>";
        echo ($logikai ? 'Ez igaz.' : 'Ez hamis.');
        if ($logikai){
            echo 'Ez igaz';
        }else{
            echo 'Ez hamis';
        }
        $szam = rand(-1, 1);
        echo "A véletlen szám: $szam<br>";
        switch ($szam) {
            case -1:
                echo "A szám negatív";
                break;            
                case 0:
                    echo "A szám nulla";
                    break;          
                    default:
                    echo "A szám pozitív";
                    break;
                }            
        echo "<h2>Ciklusok</h2>";
        $tomb = array(1,3,4);
        // foreach
        foreach ($tomb as $ertek){
            echo $ertek.'<br>';
        }
        $asszTomb = array("Szandi" => 10, "István" => 20);
        foreach ($asszTomb as $kulcs => $ertek){
            echo "$kulcs: $ertek<br>";
        }
        
        echo "<h2>1. Feladat</h2>";
        $randTomb = array();
        for ($i=0; $i < 5; $i++) { 
            $szam = rand(20, 30);
            array_push($randTomb, $szam);
        }
        $osszeg = 0;
        for ($i=0; $i < count($randTomb); $i++) { 
            $osszeg+=$randTomb[$i];
        }
        print_r($randTomb);
        echo "<br>Tömb elemeinek összege: $osszeg";
        
        // Hf Feladatokba a 2,3 (4 nem)
        echo "<h2>2. Feladat</h2>";
        $jegyek = array();
        for ($i=0; $i < 3; $i++) { 
            $jegy = rand(1, 5);
            array_push($jegyek, $jegy);
        }
        for ($i=0; $i < count($jegyek); $i++) { 
            switch ($jegyek[$i]) {
                case 1:
                    echo "$jegyek[$i] elégtelen";
                    break;            
                case 2:
                    echo "$jegyek[$i] elégséges";
                    break;          
                case 3:
                    echo "$jegyek[$i] közepes";
                    break;
                case 4:
                    echo "$jegyek[$i] jó";
                    break;
                default:
                    echo "$jegyek[$i] jeles";
                    break;
            } 
        }
        echo $jegyek;

    ?>
</body>
</html>