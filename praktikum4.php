<?php
// Fungsi untuk memeriksa apakah suatu angka prima
function isPrime($number) {
  if ($number <= 1) {
    return false;
  }
  
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
      return false;
    }
  }
  
  return true;
}

// Mencetak angka prima antara 1 hingga 1000
$number = 1;
while ($number <= 1000) {
  if (isPrime($number)) {
    echo $number . " ";
  }
  $number++;
}
?>