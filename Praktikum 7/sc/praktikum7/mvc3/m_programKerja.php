<?php
class m_programKerja
{
    public $hasil = array();
    private $mysqli;
    public function __construct()
    {
        require 'koneksiMVC.php';
    }
    public function setProgramKerja(
        $nomorProker,
        $namaProker,
        $suratKet
    ) {
        require 'koneksiMVC.php';
        $rs = $this->mysqli->query("INSERT INTO proker
VALUES ('$nomorProker', '$namaProker','$suratKet')");
    }
    public function getProgramKerja($nomorProker)
    {
        require 'koneksiMVC.php';
        $rs = $this->mysqli->query("SELECT * FROM
proker WHERE nomorProgram = $nomorProker");
        $this->hasil = $rs->fetch_array();
        return $this->hasil;
    }
    public function deleteProker($nomorProker)
    {
        require 'koneksiMVC.php';
        $rs = $this->mysqli->query("DELETE from proker
WHERE nomorProgram = $nomorProker");
    }
    public function editProker(
        $nomorProker,
        $namaProker,
        $suratKet
    ) {
        require 'koneksiMVC.php';
        $rs = $this->mysqli->query("UPDATE proker SET
namaProgram = '$namaProker',suratKeterangan=
'$suratKet' WHERE nomorProgram = $nomorProker");
    }
    public function getAll()
    {
        require 'koneksiMVC.php';
        $rs = $this->mysqli->query("SELECT * FROM
proker");
        while ($row = $rs->fetch_assoc()) {
            $this->hasil[] = $row;
        }
        return $this->hasil;
    }
}
