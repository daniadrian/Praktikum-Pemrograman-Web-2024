<?php
include_once("m_programKerja.php");
class c_programKerja
{
    public $model;
    public function __construct($nama)
    {
        $this->model = new m_programKerja("1", "FILKOM ABDIMASA", "SK-001");
        $this->model->setProgramKerja();
    }
    public function invoke()
    {
        $proker = $this->model->getAll();
        include 'v_programKerja.php';
    }
}
