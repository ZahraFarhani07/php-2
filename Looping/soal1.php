<?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

         echo "LOOPING PERTAMA <br>";
         for($i = 2; $i <= 20 ; $i+= 2 ){
            echo "$i - I Love PHP <br>";
        }
        echo "LOOPING KEDUA <br>";
        for($i = 20; $i >= 2 ; $i-= 2 ){
           echo "$i - I Love PHP <br>";
       }

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "Array numbers: ";
        print_r($numbers);

        $rest = [];
        foreach($numbers as $numbers) {
        $rest[] = $numbers % 5;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        print_r($rest);

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        foreach ($items as $item) {
            $itemasosiatif= [
                'id' => $item[0],
                'name' => $item[1],
                'price' => $item[2],
                'description' => $item[3],
                'source' => $item[4]
            ];
            print_r($itemasosiatif);
            echo "<br>";
        }
        
        echo "<h3>Soal No 4 Asterix </h3>";

        echo "Asterix: <br>";
        for ($y = 1; $y <= 5; $y++) {
            for ($x = 1; $x <= $y; $x++) {
                echo "*.";
            }
            echo "<br>"; 
        }             
?>