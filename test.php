<?php
    require './classe_crepe.php';
    $crepeauchocolat = new Crêpe (2,3,5,["chocolat"]); // ici on ne connait pas encore le topping donc on l'initialise en array puisque le topping constituera plusieurs éléments.
    var_dump($crepeauchocolat);
    echo $crepeauchocolat-> description_crepe();

    //ci dessous on utilise une methode qu'on avait créé dans la classe qui nous permet d'afficher les données privées , ci dessous topping est un tableau donc on utilise var_dump mais si ça avait était une string on aurait utiliser echo du genre echo $crepeauchocolat -> getTopping();
    var_dump( $crepeauchocolat-> getTopping());

    // ci dessous on modifie la valeur de topping, à la place du tableau, on y met une string. Puis on l'affiche avec notre fonction getter. 
    // $crepeauchocolat -> setTopping ("vanille");
    // echo  "\n". $crepeauchocolat -> getTopping();

    $crepeauchocolat -> addTopping("Vanille");
    var_dump($crepeauchocolat->getTopping());

    // 

    
