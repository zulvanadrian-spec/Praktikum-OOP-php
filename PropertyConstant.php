<?php

class produk{

    //property
    public string $kode;
    public string $nama;
    public float $harga;
    public int $stok;
    
    //constant
    public const PAJAK = 0.11;

    //function
    public function __construct($kode, $nama, $harga, $stok){
        $this->kode= $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
    public function pajak(){
        return self::PAJAK * 100; //11
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

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

echo "Total harga setelah pajak:". "Rp.". $produk->total();