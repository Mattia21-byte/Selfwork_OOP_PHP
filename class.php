<?php
//Dato il seguente codice di partenza:Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
// Category
// -- Attualita'
// -- Sport
// -- Gossip
// -- Storia

// Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo.

abstract class Category{
    abstract public function getMyCategory();
}

class Attualita extends Category{
    public function getMyCategory(){
        echo "la categoria è Attualità\n";
    }
}
class Sport extends Category{
    public function getMyCategory(){
        echo "la categoria è Sport\n";
    }
}
class Gossip extends Category{
    public function getMyCategory(){
        echo "la categoria è Gossip\n";
    }
}
class Storia extends Category{
    public function getMyCategory(){
        echo "la categoria è Storia\n";
    }
}

//trait
trait News{
    public function getNews(){
        echo "ecco a voi le notizie del giorno\n";
    }
}

//creo una nuova classe
class NewClass{
    use News;
    public $getMyCategory;

    //uso il costruttore per chiamare il metodo del trait
    public function __construct($getMyCategory){
        $this->getMyCategory = $getMyCategory;
    }

    //creo la funzione per utilizzare il metodo
    public function getIt(){
        $this->getMyCategory->getMyCategory();
        $this->getNews();
    }
}

//creo un oggetto della classe NewClass
$new = new NewClass(new Storia);
$new->getIt();








































































?>