<?php
// Menghitung nilai akhir siswa
function hitungNilaiAkhir($nilaiUjian, $nilaiTugas, $nilaiKehadiran) {
  $bobotUjian = 0.6;
  $bobotTugas = 0.3;
  $bobotKehadiran = 0.1;

  // Menghitung nilai akhir
  $nilaiAkhir = ($nilaiUjian * $bobotUjian) + ($nilaiTugas * $bobotTugas) + ($nilaiKehadiran * $bobotKehadiran);

  return $nilaiAkhir;
}

// Contoh penggunaan
$nilaiUjian = 80;
$nilaiTugas = 90;
$nilaiKehadiran = 95;

$nilaiAkhir = hitungNilaiAkhir($nilaiUjian, $nilaiTugas, $nilaiKehadiran);
echo "Nilai akhir siswa: " . $nilaiAkhir;
?>
