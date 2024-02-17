<?php
function hitungKemunculanKarakter($kalimat, $karakter) {
    $jumlah_kemunculan = 0;
    $panjang_kalimat = strlen($kalimat);

    for ($i = 0; $i < $panjang_kalimat; $i++) {
        if ($kalimat[$i] === $karakter) {
            $jumlah_kemunculan++;
        }
    }

    return $jumlah_kemunculan;
}

// Contoh penggunaan
$kalimat = "Programmer";
$karakter = "r";

$jumlah_kemunculan = hitungKemunculanKarakter($kalimat, $karakter);
echo "Jumlah kemunculan karakter '$karakter' dalam kalimat '$kalimat': $jumlah_kemunculan";
?>
