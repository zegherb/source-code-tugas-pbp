<?php
class Mahasiswa{
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function info(){
        return "Nama: {$this->nama}\nNIM: {$this->nim}\nJurusan: {$this->jurusan} ";
    }
}
$mahasiswa1 = new Mahasiswa("Aldyansyah Ombi","F1G124036","Ilmu Komputer");
echo $mahasiswa1->info();
echo "\n\n";
$mahasiswa2 = new Mahasiswa("Fadel Ombi","B1B121235","Manajemen");
echo $mahasiswa2->info();
echo "\n\n";
$mahasiswa3 = new Mahasiswa("Putra Ombi","H1A121400","Ilmu Hukum");
echo $mahasiswa3->info();
?>