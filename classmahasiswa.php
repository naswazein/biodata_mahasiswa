<?php
class mahasiswa{
    public $nim = "123";
    public $nama = "nasu";
    public $jurusan = "rpl";

    function tampil_biodata(){
        echo $this->nim ;
        echo $this->nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa->tampil_biodata()
?>