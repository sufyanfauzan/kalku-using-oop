<?php
class Kalkulator {
    public $a;
    public $b;

    public function setTambah($a,$b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a + $this->b;
        return $hasil;
    }

    public function setKali($a,$b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a * $this->b;
        return $hasil;
    }

    public function setKurang($a,$b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a - $this->b;
        return $hasil;
    }

    public function setBagi($a,$b){
        $this->a = $a;
        $this->b = $b;
        $hasil = $this->a / $this->b;
        return $hasil;
    }
}
?>