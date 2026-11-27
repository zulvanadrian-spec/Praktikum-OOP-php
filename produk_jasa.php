<?php

//panggil file PropertyConstant.php
require('./Jasa.php');

use Pbo\Marketplace\Jasa;

// object
$produk = new jasa();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga(10000000)
       ->setStok(5);

//mengisi class
// $produk->kode = "P001";
// $produk->nama = "Laptop";
// $produk->harga = 10000000;
// $produk->stok = 5;

//output
echo "Produk:". $produk->getNama()
."<br>";
echo "Harga:  Rp".$produk->getHarga() 
."<br>";

echo "Stok:".  $produk->getStok()
."<br>";

echo "Pajak:".  $produk->pajak() . "%";
echo "<br>";

echo "<br> Total harga setelah pajak:". "Rp.". $produk->total();

echo "<br>";
echo "Metode Pembayaran : ". $produk->payment('qris');