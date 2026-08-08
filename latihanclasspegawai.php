<?php
class Pegawai {
    public $nama;
    public $gaji;

    public function __construct($nama, $gaji) {
        $this->nama = $nama;
        $this->gaji = $gaji;
    }
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Gaji: " . $this->gaji . "<br>";
    }
}
class Manager extends Pegawai {
    public $tunjangan;

    public function __construct($nama, $gaji, $tunjangan) {
        parent::__construct($nama, $gaji);
        $this->tunjangan = $tunjangan;
    }
    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Tunjangan: " . $this->tunjangan . "<br>";
    }
}
class Staf extends Pegawai {
    public $lembur;

    public function __construct($nama, $gaji, $lembur) {
        parent::__construct($nama, $gaji);
        $this->lembur = $lembur;
    }
    public function tampilkanInfo() {
        parent::tampilkanInfo();
        echo "Lembur: " . $this->lembur . "<br>";
    }
}
$manager1 = new Manager("Budi", 7000000, 3000000);
$manager1->tampilkanInfo();

$staf1 = new Staf("Ani", 4000000, 500000);
$staf1->tampilkanInfo();
?>