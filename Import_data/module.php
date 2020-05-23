<?php 
try 
{
    $bdd = new PDO('mysql:localhost;database=com_tech_office_appli;charset=utf8', 'root', 'passeword')
}
catch(Exception as $e)
{
    die('Erreur :'.$e->getMessage());
    
}

 // On recupeére le contenu de la table commande_temp

 $reponse = $bdd->query('SELECT * FROM suivie_vente_temp');

 while($donnees = $reponse->fetch())
 {
    ?><p>
        <em>La commande numéro</em>: <strong><?php echo $donnees['Reference_commande']; ?></strong> a été effectué le : <strong><?php echo $donnees['Date']; ?></strong>; 
        sur le marketplace <strong><?php echo $donnees['total_sans_frais_traitement']; ?></strong>, au numéro de facture <strong><?php echo $donnees['N_facture']; ?></strong>
        La commande concerne l'article <strong><?php echo $donnees['Detail_Produit']; ?></strong>: la commission prélevé par le marketplace s'élève à <strong><?php echo $donnees['Commissions']; ?> euros</br></strong>
    </p>


<?php 
 }
$reponse->closeCursor(); 

?>

?>