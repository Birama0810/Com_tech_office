<?php
function bddConnect()
{
    try 
    {
         $bdd = new PDO('mysql:host=localhost;dbname=com_tech_office_appli;charset=utf8', 'root', 'oui');
    } 
    catch (Exception $ex) 
    {
          die('Erreur : '.$e->getMessage());
    }
}
function AffOperation()
{
    $bdd = bddConnect();
    $reponse = $bdd->query('SELECT * FROM operation');

 while($donnees = $reponse->fetch())
 {
	?>
        <table border = "1">
            <thead>
                <tr>
                    <th>Id_operation </th>
                    <th>Id_marketplace </th>
                    <th>N_commande </th>
                    <th>Comission_sansFrais_trairement </th>
                    <th>Reglement_cdiscount </th>
                    <th>Total_sansFrais_Traitement </th>
                    <th>Montant_vente </th>
                    <th>Type_operation </th>
                    <th>Date_operation </th>
                    <th>Status_commande </th>
                    <th>Status_paiement </th>
                    <th>Date_paiement </th>
                    <th>N_Facture </th>
                    <th>DATE_FACTURE </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = $reponse->fetch())
                {
                 ?>           
                    <tr>
			<td><?php echo $row['Id_operation']; ?></td>
			<td><?php echo $row['Id_marketplace']; ?></td>
			<td><?php echo $row['N_commande']; ?></td>
			<td><?php echo $row['Comission_sansFrais_trairement']; ?></td>
			<td><?php echo $row['Reglement_cdiscount']; ?></td>
			<td><?php echo $row['Total_sansFrais_Traitement']; ?></td>
                        <td><?php echo $row['Montant_vente']; ?> <strong>€</strong></td>
                        <td><?php echo $row['Type_operation']; ?></td>
			<td><?php echo $row['Date_operation']; ?></td>
			<td><?php echo $row['Status_commande']; ?></td>
			<td><?php echo $row['Status_paiement']; ?></td>
			<td><?php echo $row['Date_paiement']; ?></td>
			<td><?php echo $row['N_Facture']; ?></td>
			<td><?php echo $row['DATE_FACTURE']; ?></td>
                    </tr>  
            <?php
                    }
 }
            ?>
            </tbody>
        </table>  
        <?php
        $reponse->closeCursor();
}
        ?>
