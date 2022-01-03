<?php
    require './classe_crepe.php';
    $crepeauchocolat = new Crêpe (2,3,5,[]); // ici on ne connait pas encore le topping donc on l'initialise en array puisque le topping constituera plusieurs éléments.
    var_dump($crepeauchocolat);
    echo $crepeauchocolat-> description_crepe();

    //ci dessous on utilise une methode qu'on avait créé dans la classe qui nous permet d'afficher les données privées 
    var_dump( $crepeauchocolat-> getTopping());

    $crepeauchocolat -> setTopping ("vanille");
    echo  "\n". $crepeauchocolat -> getTopping();
    
