<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($string) {
    echo "Halo $string, Selamat Datang di Jabar Coding Camp!";
  }

  greetings("Bagas");
  echo "<br>";
  greetings("Wahyu");
  echo "<br>";
  greetings("Abdul");

echo "<h3>Soal No 2 Reverse String</h3>";

function reverse($str1) {
  $Length = strlen($str1);
  $output = '';
  for ($i = ($Length - 1); $i >= 0; $i--) {
    $output .= $str1[$i];
  }
  return $output;
}
function reverseString($str2) {
  $stringg = reverse($str2);
  echo $stringg ."<br>";
}

reverseString("abduh");
reverseString("Bootcamp");
reverseString("We Are JCC Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome ($kata1) {
  $kata2 = reverse($kata1);
  if ($kata1 == $kata2) {
    echo 'palindrome(' . $kata1 . ') = true <br>';
  } else {
    echo 'palindrome(' . $kata2 . ') = false <br>';
  }
}

palindrome ("civic") ; 
palindrome ("nababan") ; 
palindrome ("jambaban"); 
palindrome ("racecar"); 


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($val){
  $hasil = 'tentukan_nilai('.$val.') = ';
  if ($val >= 85 && $val <= 100) {
    $hasil .= 'Sangat Baik';
  } else if ($val >= 70 && $val < 85) {
    $hasil .= 'Baik';
  } else if ($val >= 60 && $val < 70) {
    $hasil .= 'Cukup';
  } else {
    $hasil .= 'Kurang';
  }
  return $hasil ."<br>";
}

echo tentukan_nilai(98); 
echo tentukan_nilai(76); 
echo tentukan_nilai(67); 
echo tentukan_nilai(43); 


?>