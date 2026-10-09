<?php

class produk{

    //property
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;
}

//memanggil class
$produk = new produk();

//mengisi class
$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100; //11
$jumlahPajak = $produk->harga * Produk::PAJAK; // 1,1 juta

//total
$total = $produk->harga + $jumlahPajak; //11,1 juta

//output
echo "Produk: $produk->nama <br>";
echo "Harga:  Rp.$produk->harga <br>";
echo "Stok:  $produk->stok <br>";
echo "Pajak:  $pajak% <br>";
echo "<br>Total harga setelah pajak: Rp.$total <br>";