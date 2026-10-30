<?php

//panggil file PropertyConstant.php
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//memanggil class
$produk = new produk('P001', 'Laptop', 10000000, 5);

//mengisi class
// $produk->kode = "P001";
// $produk->nama = "Laptop";
// $produk->harga = 10000000;
// $produk->stok = 5;

//output
echo "Produk: $produk->nama <br>";
echo "Harga:  Rp.$produk->harga <br>";

echo "Stok:".  $produk->stok;
echo "<br>";

echo "Pajak:".  $produk->pajak() . "%";
echo "<br>";

echo "<br> Total harga setelah pajak:". "Rp.". $produk->total();