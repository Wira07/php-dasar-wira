<?php

// Deklarasi array paket dan harga
$paket = ["Paket Harmoni", "Paket Ritme", "Paket Melodi"];
$harga = [149000, 219000, 299000];

// Fungsi untuk menampilkan data dari array $paket
function tampilkan_paket($paket, $harga) {
  echo "<ul>";
  for ($i = 0; $i < count($paket); $i++) {
    echo "<li>", $i + 1, ". ", $paket[$i], " - Rp", number_format($harga[$i], 0, ',', '.'), "</li>";
  }
  echo "</ul>";
}

// Tampilkan daftar paket
echo "<h2>Daftar Paket</h2>";
tampilkan_paket($paket, $harga);

// Input pilihan paket dan lama subscription
$pilihan_paket = (int) readline("Masukkan pilihan paket (1-3): ");
$lama_subscription = (int) readline("Masukkan lama subscription (bulan): ");

// Validasi input
if (!is_numeric($pilihan_paket) || !is_numeric($lama_subscription)) {
  echo "Inputan harus berupa angka.\n";
  exit;
}

if ($pilihan_paket < 1 || $pilihan_paket > 3) {
  echo "Pilihan paket harus antara 1-3.\n";
  exit;
}

// Hitung total biaya berdasarkan pilihan paket dan lama
// subscription
$total_harga = $harga[$pilihan_paket - 1] * $lama_subscription;

// Tampilkan total harga
echo "<h2>Total Harga</h2>";
echo "<p>Total harga yang perlu dibayar adalah Rp", number_format($total_harga, 0, ',', '.'), "</p>";

?>
