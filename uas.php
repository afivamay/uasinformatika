<?php

echo 'Nama : afiva Maylinda';
echo '<br><br>';
echo 'Absen / Kelas : 2 / X RPL 1';
echo '<br><br>';

$kalorisekalimakan = 2500;

$senin = 3;
$selasa = 2;
$rabu = 2;
$kamis = 3;
$jumat = 3;
$sabtu = 2;
$minggu = 1;

// Jawaban yang a
$kalorisenin = $senin * $kalorisekalimakan;
$kaloriselasa = $selasa * $kalorisekalimakan;
$kalorirabu = $rabu * $kalorisekalimakan;
$kalorikamis = $kamis * $kalorisekalimakan;
$kalorijumat = $jumat * $kalorisekalimakan;
$kalorisabtu = $sabtu * $kalorisekalimakan;
$kaloriminggu = $minggu * $kalorisekalimakan;

$kaloriperminggu = $kalorisenin + $kaloriselasa + $kalorirabu + $kalorikamis + $kalorijumat + $kalorisabtu + $kaloriminggu;

// Jawaban yang b
$harisenin = 5;
$hariselasa = 6;
$harirabu = 8;
$harikamis = 8;
$harijumat = 5;
$harisabtu = 6;
$hariminggu = 4;

$jumlah = $harisenin + $hariselasa + $harirabu + $harikamis + $harijumat + $harisabtu + $hariminggu;

echo 'Fu saat ini sedang sakit butuh makan dan istirahat yang cukup. Fi sebagai adiknya tidak bisa menghitung dengan persis Fu sudah makan berapa kalori dan berapa lama istirahat. Bisakah kalian batu Fi untuk membantu menghitungnya dengan program yang kalian buat';
echo '<br><br>';

echo 'a. hitung jumlah kalori perhari dan perminggu jika sekali makan mendapat 2500 kalori. Bagaimana jika Fu senin ', $senin, ' kali, selasa ', $selasa, ' kali, rabu ', $rabu, ' kali, kamis ', $kamis, ' kali, jumat ', $jumat, ' kali, sabtu ', $sabtu, '  kali, minggu', $minggu, ' kali?';
echo '<br>';
echo 'Jadi kalori hari senin    = ', $kalorisenin;
echo '<br>';
echo 'Jadi kalori hari selasa   =' , $kaloriselasa;
echo '<br>';
echo 'Jadi kalori hari rabu     = ', $kalorirabu;
echo '<br>';
echo 'Jadi kalori hari kamis    = ', $kalorikamis;
echo '<br>';
echo 'Jadi kalori hari jumat    = ', $kalorijumat;
echo '<br>';
echo 'Jadi kalori hari sabtu    = ', $kalorisabtu;
echo '<br>';
echo 'Jadi kalori hari minggu   = ', $kaloriminggu;
echo '<br>';
echo 'Jadi kalori per minggu Fu = ', $kaloriperminggu;

echo '<br><br>';
echo 'b. hitung jumlah waktu istirahat per hari dan per minggu jika sekali istirahat tidur orang dewasa butuh 8 jam. Bagaimana jika Fu: senin 5 jam, selasa 6 jam, rabu 8 jam, kamis 8 jam, jumat 5 jam, sabtu 6 jam, minggu 4 jam?';
echo '<br>';
echo 'Jadi jumlah waktu istarahat per minggu = ', $jumlah, ' jam';

echo '<br><br>';
echo 'Karena kebutuhan kalori Fu sudah terpenuhi dan melakukan istirahat yang cukup. Bisa dikatakan kondisi Fu cukup baik. Meski begitu Fu tetap harus menjaga pola makan dan pola tidur';

echo '<br><br>';
echo 'Sekian dari saya terima kasih :)';

?>