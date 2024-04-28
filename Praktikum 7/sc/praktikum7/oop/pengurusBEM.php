<?php
class pengurusBEM
{
    public $nama;
    public $nim;
    public $angkatan;
    private $jabatan;
    private $foto;
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        echo "Nama : $this->nama<br>";
    }
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }
    public function getJabatan()
    {
        echo "Jabatan : $this->jabatan<br>";
    }
    public function setNIM($nim)
    {
        $this->nim = $nim;
    }
    public function getNIM()
    {
        echo "NIM : $this->nim<br>";
    }
    public function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;
    }
    public function getAgkatan()
    {
        echo "Agkatan : $this->angkatan<br>";
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    public function getFoto()
    {
        echo "Foto : <br><img src = $this->foto width='300'>";
    }
}
