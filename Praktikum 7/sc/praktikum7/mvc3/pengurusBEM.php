<?php
class pengurusBEM
{
    private $nama;
    private $nim;
    private $angkatan;
    private $jabatan;
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }
    public function getJabatan()
    {
        return $this->jabatan;
    }
    public function setNim($nim)
    {
        $this->nim = $nim;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function pilih()
    {
        $jabat = $this->getJabatan();
        $nama = $this->getNama();
        $nim = $this->getNim();
        if ($jabat == "Kepala Departemen") {
            echo "<meta http-equiv=\"refresh\"
content=\"0;index.php?name=$nama&nim=$nim&jabatan=$jabat\">";
        } else if ($jabat = "Menteri") {
            echo "<meta http-equiv=\"refresh\"
content=\"0;menteri.php?name=$nama&nim=$nim&jabatan=$jabat\">";
        } else {
            header('location: login.php?e=2');
        }
    }
}
