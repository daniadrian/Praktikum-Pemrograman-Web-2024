<?php
class m_programKerja
{
    private $nomorProgram;
    private $namaProgram;
    private $suratKeterangan;
    public $hasil = array();
    public function __construct($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->nomorProgram = $nomorProgram;
        $this->namaProgram = $namaProgram;
        $this->suratKeterangan = $suratKeterangan;
    }
    // Add Program Kerja
    public function setProgramKerja()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("INSERT INTO proker VALUES ('$this->nomorProgram','$this->namaProgram','$this->suratKeterangan')");
    }
    // Get All ProgramKerja
    public function getAll()
    {
        require "koneksiMVC.php";
        $sql = "SELECT * FROM proker";
        $rs = $mysqli->query($sql);
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}
