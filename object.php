<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("DiAjeng","Lubuk Linggau");
// ini merupakan sebuah objek dengan data nama dan alamat yang mana belum terdapat data yang menyebutkan negara 

// manipulasi properti nama, alamat, negara
$person->nama = "DiAjeng";
$person->alamat = "Lubuk Lingau";
$person->negara = "Jepang";

// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;
echo "alamat = {$person->alamat}" . PHP_EOL;
echo "negara = {$person->negara}" . PHP_EOL;
