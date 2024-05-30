<?php
// Fungsi untuk mencetak pola angka
function cetakPolaAngka($tinggi) {
  $angka = 1;
  for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $angka;
    }
    echo "<br>";
    $angka++;
  }
}

// Contoh penggunaan
$tinggiPola = 5;
cetakPolaAngka($tinggiPola);
?>
