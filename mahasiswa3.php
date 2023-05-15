<?php

class mahasiswa{
    public $nim = "123";
    public $nama = "nasu";
    public $jurusan = "rpl";
    function tampil_biodata(){
        echo $this-> nim,"<br>";
        echo $this-> nama,"<br>";
        echo $this-> jurusan;
    }
}
$mahasiswa1= new mahasiswa();
    $mahasiswa1->nim = "123";
    $mahasiswa1->nama = "nasu";
    $mahasiswa1->jurusan = "rpl";

$mahasiswa1->tampil_biodata();

$mahasiswa1 = new mahasiswa("123","nasu","rpl");