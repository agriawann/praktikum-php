<?php
// Fungsi untuk mencetak pola bintang segitiga siku-siku terbalik
function cetakPolaSegitigaTerbalik($tinggi) {
  for ($i = $tinggi; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo "* ";
    }
    echo "<br>";
  }
}

// Contoh penggunaan
$tinggiSegitiga = 5;
cetakPolaSegitigaTerbalik($tinggiSegitiga);
?>
