<?php

class Nilai {
    public function getnilaiRataRata($nTugas, $nKuis, $nUTS, $nUAS) {
        // Perbaikan: Tambahkan tanda $ pada $nUAS
        $nilaiRataRata = ($nTugas + $nKuis + $nUTS + $nUAS) / 4;
        return $nilaiRataRata;
    }

    public function hitungNilaiAkhir($tugas, $kuis, $uts, $uas) {
        // Perbaikan: Ganti koma (,) menjadi tambah (+)
        $nilaiAkhir = ($tugas * 0.15) + ($kuis * 0.15) + ($uts * 0.30) + ($uas * 0.40);

        if ($nilaiAkhir >= 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        return [
            'nilai_akhir' => $nilaiAkhir,
            'status' => $status
        ];
    }
}

$Nilai = new Nilai();
$tugas = 80;
$kuis = 80;
$uts = 85;
$uas = 90;

$nilaiRataRata = $Nilai->getnilaiRataRata($tugas, $kuis, $uts, $uas);
echo "Nilai Rata Rata: " . $nilaiRataRata . "<br>";

$hasilakhir = $Nilai->hitungNilaiAkhir($tugas, $kuis, $uts, $uas);
echo "Nilai Akhir: " . $hasilakhir['nilai_akhir'] . "<br>";
echo "Status: " . $hasilakhir['status'] . "<br>";

?>