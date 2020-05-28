<?php



//polymorphisme
class Explication_1 extends CI_Controller {

    public function begin() {
        echo "c'est good";
    }

}

?>
<!--
    A retenir: Il est important que la classe est le même nom que la page,
    sans quoi cela ne marcheras pas.

    Analyse de l'url:
    ci/index.php/Explication_1/begin

    -> ci pour la racine(en local), cela peut être votre DNS(en prod).
    -> index.php, un fichier php appartenant a CodeIgniter à ne pas delete.
    -> Explication_1, le nom de la class liée a la page(les deux nom doivent être identique).
    -> La norme Perk ne s'applique qu'a la class et non à l'URL.
    -> begin pour la function begin(), modifiable.

    Autre façon d'interpréter l'url:

    a partir de /Explication_1/begin

    -> Explication_1 est le controller.
    -> begin est la méthode

    <!>le dossier controller de ci n'as rien a voir avec votre propre class,
    l'url demande votre controller et non le document controller.

    ..ensuite, il est possible rajoutée des paramétres liée à la méthode(function ici)
    donc résumont:

    dns/index.php/controller/methode/paramètre1/paramètre2/etc

-->