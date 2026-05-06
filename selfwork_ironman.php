<?php

// Crea la tua armatura di Ironman seguendo il modello visto a lezione, seguendo i seguenti punti:
// metti ogni classe (abstract o no) in un file diverso, utilizzando nel file principale la funzione require()
// crea un esercito random di Ironman
// aggiungi un contatore di quanti Ironman hai creato

abstract class ArmaturaAnteriore{
    abstract public function equipaggiamentoAnteriore();
}

abstract class ArmaturaPosteriore{
    abstract public function equipaggiamentoPosteriore();
}


//armatura anteriore
class ElmoLuminoso extends ArmaturaAnteriore{
    public function equipaggiamentoAnteriore(){
        echo "Elmo Luminoso\n";
    }
}

class  ScudoInfrangibile extends ArmaturaAnteriore{
    public function equipaggiamentoAnteriore(){
        echo "Scudo Infrangibile\n";
    }
}

class BustoCorazzato extends ArmaturaAnteriore{
    public function equipaggiamentoAnteriore(){
        echo "Busto Corazzato\n";
    }
}

class SchinieriIndistruttibili extends ArmaturaAnteriore{
    public function equipaggiamentoAnteriore(){
        echo "Schinieri Indistruttibili\n";
    }
}


//armatura posteriore
class MantelloInvisibile extends ArmaturaPosteriore{
    public function equipaggiamentoPosteriore(){
        echo "Mantello Invisibile\n";
    }
}

class StivaliVolanti extends ArmaturaPosteriore{
    public function equipaggiamentoPosteriore(){
        echo "Stivali Volanti\n";
    }
}

class AliMeccaniche extends ArmaturaPosteriore{
    public function equipaggiamentoPosteriore(){
        echo "Ali Meccaniche\n";
    }
}

class ArpioneLanciabile extends ArmaturaPosteriore{
    public function equipaggiamentoPosteriore(){
        echo "Arpione Lanciabile\n";
    }
}

class Ironman{
    public $armaturaAnteriore;
    public $armaturaPosteriore;
    public function __construct($armaturaAnteriore, $armaturaPosteriore){
        $this->armaturaAnteriore = $armaturaAnteriore;
        $this->armaturaPosteriore = $armaturaPosteriore;
    }

    public function difesa(){
        $this->armaturaAnteriore->equipaggiamentoAnteriore();
        $this->armaturaPosteriore->equipaggiamentoPosteriore();

    }


}

//array armature anteriori
$armatureAnteriori = [new ElmoLuminoso(), new ScudoInfrangibile(), new BustoCorazzato(), new SchinieriIndistruttibili()];

//array armature posteriori
$armaturePosteriori = [new MantelloInvisibile(), new StivaliVolanti(), new AliMeccaniche(), new ArpioneLanciabile()];

//creo un esercito di ironman
$esercitoIronman = [];
for($i = 0; $i < 30; $i++){
  $ironman = new IronMan($armatureAnteriori[array_rand($armatureAnteriori)], $armaturePosteriori[array_rand($armaturePosteriori)]);
  $esercitoIronman[] = $ironman;
   

}

foreach($esercitoIronman as $ironman){
    $ironman->difesa();
    echo "----------------\n";
}

echo "Numero di Ironman creati: " . count($esercitoIronman) . "\n";













































?>