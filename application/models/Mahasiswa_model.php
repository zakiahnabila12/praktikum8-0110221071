<?php
class Mahasiswa_model extends CI_Model{
    // buat variabel public
    public $id, $nim, $nama, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        //ternary operation
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>