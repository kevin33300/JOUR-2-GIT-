<?php
class Crêpe {

    // ci dessous les paramètres/ou attributs qui vont servir à créer notre objet. Il y en a des privés et il y en a des publiques. 
    public $oeuf;
    public $beurre;
    public $farine;
    private $topping; // ici c'est un attribut privé

    // ci dessous le constructeur qui est la fonction permettant de créer l'objet, elle a comme paramètres les variables créées ci dessus. IL Y A TOUJOURS DEUX UNDERSCORE SUR LA FONCTION CONSTRUCT
    public function __construct(
        $oeuf, // on aurait pu aussi mettre aliment 1 ici 
        $beurre,
        $farine,
        $topping,
    ) {
        $this->oeuf = $oeuf; // donc on aurait mis ici $this->oeuf = $aliment1
        $this->beurre = $beurre;
        $this->farine = $farine;
        $this->topping = $topping;
    }

    public function description_crepe () {
        echo "Il s'agit d'une crêpe avec : \n";
        echo $this->oeuf. " oeufs. \n";
        echo $this->beurre. " beurre. \n";
        echo $this->farine. " farine. \n";
        

    }
    // la donnée topping étant privée, on créer une fonction qui permet de l'afficher, mais pas forcément de la modifier ou autre. Par exemple dans un jeux vidéo l'utilisateur a le droit de voir ses points de vie mais pas de les modifier etc... 
    public function getTopping () {
        return $this->topping;
    }

    public function setTopping ($parametre) {
        $this->topping = $parametre;
       
    }

    public function addTopping ($nouveauTopping) {
        array_push($this->topping,"$nouveauTopping");
    }
}