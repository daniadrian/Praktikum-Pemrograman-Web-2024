<?php
include_once("m_programKerja.php");
class c_programKerja
{
    public $model;
    public function __construct()
    {
        $this->model = new m_programKerja();
    }
    public function invoke($nama, $nim, $jabatan)
    {
        $proker = $this->model->getAll();
        $n = $nama;
        $ni = $nim;
        $j = $jabatan;
        include 'v_programKerja.php';
    }
    function insert()
    {
        $this->model->setProgramKerja(
            $_POST['nomor'],
            $_POST['nama'],
            $_POST['surat']
        );
        header('Location: index.php');
    }
    function viewInsert()
    {
        include "v_tambahProgramKerja.php";
    }
    function update()
    {
        $this->model->editProker(
            $_POST['nomor'],
            $_POST['nama'],
            $_POST['surat']
        );
        header('Location: index.php');
    }
    function viewUpdate($nomorProgram)
    {
        $proker = $this->model->getProgramKerja($nomorProgram);
        include "v_editProgramKerja.php";
    }
    function delete($nomorProgram)
    {
        $this->model->deleteProker($nomorProgram);
        header('Location: index.php');
    }
}
