<?php

    class Explication_2 extends CI_Controller {

        public function begin($prenom = '', $nom = '') {
            echo "bonjour ".$nom. ' ' .$prenom;
        }
    }

?>
<!--
    Les paramètres:
    Ici la methode begin(donc une function hein) à pour paramètres/arguments
    $prenom et $nom, rien de nouveau mais ici se qui est interressant c'est de 
    voir qu'il est possible de passez ses paramètres via l'url.

    Ainsi pour l'url suivante:
    ci/index.php/Explication_2/begin/jean/dupond
    
    -> Ont obtient "bonjour dupond jean"
-->

<!--
    Rangée ses controllers:

    Le dossier d'origine controller peut être arrangée a sa guise, du moment
    que l'on ne touche pas au nom de ce dossier, pour rangée vous pouvez
    avoir la composition suivante par exemple:

    -- controllers
        -- Mes_methodes
            -- Factorisation
            -- UnFichier.php
        -- Gestion_erreurs
        -- accueil.php
        -- Melire.txt
    -- system

    Cela ne gène en rien tant que vous précédez correctement le chemin.

--> 