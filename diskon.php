<?php
function hitungDiskon($total_belanja) {
    $diskon = 0;

    if ($total_belanja >= 2000000 && $total_belanja < 5000000) {
        $diskon = 0.05;
    } elseif ($total_belanja >= 5000000 && $total_belanja < 10000000) {
        $diskon = 0.1;
    } elseif ($total_belanja >= 10000000) {
        $diskon = 0.2;
    }

    return $diskon;
}

function hitungKembalian($total_belanja, $uang_dibayar) {
    $diskon = hitungDiskon($total_belanja);
    $total_setelah_diskon = $total_belanja - ($total_belanja * $diskon);
    $kembalian = $uang_dibayar - $total_setelah_diskon;

    if ($kembalian < 0) {
        return 0; // Kembalian tidak cukup
    } else {
        return $kembalian;
    }
}

// Total belanja dan uang yang dibayarkan
$total_belanja = 7550000;
$uang_dibayar = 9000000;

$kembalian = hitungKembalian($total_belanja, $uang_dibayar);
echo "Kembalian yang diterima: Rp. " . number_format($kembalian, 0, ',', '.');
?>
