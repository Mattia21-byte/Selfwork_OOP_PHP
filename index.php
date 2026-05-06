<?php
// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
// Titolo
// Categoria
// Tag

// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.

require ('class.php');

class Post{
    public $title;
    public $category;
    public $tag;
    
    public function __construct($title, $category, $tag){
        $this->title = $title;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getPost(){
        echo "Il titolo del post è: " . $this->title . "\n";
        $this->category->getMyCategory();
        echo "I tag del post è : " . $this->tag . "\n";
    }


}
// creo oggetti della classe Post
$post1 = new Post("la caduta dell'Impero Sasanide", new Storia(),"#storia #imperoSasanide");
$post2 = new Post("la vittoria della Coppa UEFA del 2011", new Sport(),"#sport #coppaUEFA");
$post3 = new Post("Accordi segreti tra i politici orientali", new Gossip(),"#gossip #politica");
$post4 = new Post("la crisi economica del XXI secolo", new Attualita(),"#attualita #crisi");

//richiamo i metodi per visualizzare i post
$post1->getPost();
$post2->getPost();  
$post3->getPost();
$post4->getPost(); 






































































?>
