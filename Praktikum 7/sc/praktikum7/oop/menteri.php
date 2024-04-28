<?php
include "pengurusBEM.php";
class menteri extends pengurusBEM
{
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    function setJabatan($jabatan)
    { // method
        $this->jabatan = $jabatan;
    }
    public function getJabatan()
    {
        echo "$this->jabatan";
    }
    function setFoto($foto)
    { // method
        $this->foto = $foto;
    }
    public function getFoto()
    {
        echo "$this->foto";
    }
}
$mahasiswa = new pengurusBEM;
$mahasiswa->setNama("Dani Adrian");
$mahasiswa->getNama();
$mahasiswa->setNIM("225150201111009");
$mahasiswa->getNIM();
$mahasiswa->setAngkatan(2022);
$mahasiswa->getAgkatan();
$mahasiswa->setJabatan("Menteri Sosial Politik");
$mahasiswa->getJabatan();
$mahasiswa->setFoto("mensospol.jpg");
$mahasiswa->getFoto();
