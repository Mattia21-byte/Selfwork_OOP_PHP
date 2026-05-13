<?php
// Crea un trait chiamato “Calculator“ definendo le seguenti operazioni tra numeri:

// public function sum($a, $b) {
//   return $a + $b;
// }

// public function sub($a, $b) {
//   return $a - $b;
// }

// public function mul($a, $b) {
//   return $a * $b;
// }

// public function div($a, $b) {
//   return $a / $b;
// }

// public function sqr($a){
//   return sqrt($numero);
// }


// Crea quindi una classe Rettangolo con i seguenti attributi:
// Base (b);
// Altezza (h);

// Il tuo compito sara' quello di creare 3 metodi che andranno a calcolare:
// Area → b * h
// Perimetro → 2 * b + 2 * h
// Diagonale → √ hˆ2 + bˆ2 (Tutto sotto radice)

// Tutte queste operazioni pero' dovranno essere richiamate dal trait Calculator

trait Calculator {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $a / $b;
    }

    public function sqr($a){
        return sqrt($a);
    }

}

class Rettangolo {
    use Calculator;
    public $base;
    public $altezza;
    
    public function __construct($base, $altezza){
        $this->base = $base;
        $this->altezza = $altezza;

    }

    public function area(){
        return $this->mul($this->base, $this->altezza);
    }

    public function perimetro(){
        return $this->sum($this->mul(2, $this->base),
        $this->mul(2, $this->altezza));
    }

    public function diagonale(){
        return $this->sqr($this->sum($this->mul($this->altezza, $this->altezza),
        $this->mul($this->base, $this->base)));

    }
}

$rettangolo = new Rettangolo(5, 10);
echo "L'area del rettangolo è di : " . $rettangolo->area() . " cm²\n";

echo "Il perimetro del rettangolo è di : " . $rettangolo->perimetro() . " cm\n";

echo "La diagonale del rettangolo è di : " . $rettangolo->diagonale() . " cm\n";


























































































?>