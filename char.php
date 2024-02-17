<?php

// Data pembelian Andi
$total_elektronik = 7550000; // Rp 7.550.000
$uang_bayar = 9000000; // Rp 9.000.000

// Hitung kembalian
$kembalian = $uang_bayar - $total_elektronik;

// Tampilkan perhitungan
echo "Total belanja barang elektronik: Rp", number_format($total_elektronik, 0, ',', '.'), "\n";
echo "Uang pembayaran: Rp", number_format($uang_bayar, 0, ',', '.'), "\n";
echo "Kembalian: Rp", number_format($kembalian, 0, ',', '.'), "\n";

// Periksa jika terjadi kesalahan perhitungan
if ($kembalian != 2256200) {
  echo "Peringatan: Perhitungan kembalian berbeda dari angka yang Anda berikan (Rp 2.256.200). Periksa kembali program atau informasi pembelian.\n";
}

?>
