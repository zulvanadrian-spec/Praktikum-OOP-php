<?php

namespace Pbo\Marketplace;

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