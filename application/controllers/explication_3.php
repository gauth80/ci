


<?php 
    class Explication_3 extends CI_Controller {
        public function lavue($nom = '', $prenom = '') {
            $this->load->view('lavue', array(
                'nom' => $nom,
                'prenom' => $prenom));
        }
    }
?>
<!--
    Explication: Ici la methode a toujours les mêmes paramètres déclarée avec 
    un vide(sinon il y auras erreur)

    -> $this est associer à cette function et non la class Explication_3
    -> On assigne $this a load puis a view()
    -> load et view() font partie intégrante de Ci
    -> Dans view ont indique deux attributs
        ♦ le premier attribut: la vue en question
        ♦ le second attributs: ont déclares un tableau avec différents objets
    -> l'objet nom est associer a la variable $nom, etc
    -> Ont sait alors qu'elle objet appartient à quoi, cela seras utile pour la suite
-->