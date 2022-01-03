<?php
class Crêpe {

    // ci dessous les paramètres/ou attributs qui vont servir à créer notre objet. 
    public $oeuf;
    public $beurre;
    public $farine;
    // ci dessous le constructeur qui est la fonction permettant de créer l'objet, elle a comme paramètres les variables créées ci dessus. IL Y A TOUJOURS DEUX UNDERSCORE SUR LA FONCTION CONSTRUCT
    public function __construct(
        $oeuf, // on aurait pu aussi mettre aliment 1 ici 
        $beurre,
        $farine,
    ) {
        $this->oeuf = $oeuf; // donc on aurait mis ici $this->oeuf = $aliment1
        $this->beurre = $beurre;
        $this->farine = $farine;
    }

    public function description_crepe () {
        echo "Il s'agit d'une crêpe avec : \n";
        echo $this->oeuf. " oeufs. \n";
        echo $this->beurre. " oeufs. \n";
        echo $this->farine. " oeufs. \n";

    }
}