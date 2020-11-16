<?php

$mahasiswa = [
  [
  "nama" => "Bakhtiar",
  "nrp" => "183040004",
  "email" => "bakhtiar.183040004@mail.unpas.ac.id"
  ],
  [
    "nama" => "Erik Doank",
    "nrp" => "023040001",
    "email" => "erik@gmail.com"
  ]
];

$data = json_encode($mahasiswa);
echo $data;

?>