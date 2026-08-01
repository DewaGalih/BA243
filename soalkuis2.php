<?php
function hitungnilaiakhir($tugas, $uts, $uas) {
    $nilaiakhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    if ($nilaiakhir >= 70) {
        $status = "LULUS"; 
    } else {
        $status = "TIDAK LULUS"; 
    }
    echo "Output : <br>"; 
    echo "Nilai Akhir : " . $nilaiakhir . "<br>"; 
    echo "Status : " . $status . "<br>"; 
}
hitungnilaiakhir(80, 90, 80); 
?>