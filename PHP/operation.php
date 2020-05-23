<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Opérations</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
        
    </head>
    <body>
        <div class="header" style="text-align: center; font-family: Arial; background-color:grey">
            <h3><u>La liste des opérations</u></h3>
        </div>       
       <?php 

try
{
    // connection à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=com_tech_office_appli;charset=utf8', 'root', 'oui');
   
}
catch(Exception $e)
{
    // si un prblème se pressent on affiche un message et on arrete tout
    die('Erreur : '.$e->getMessage());
}



 $reponse = $bdd->query('SELECT * FROM operation order by Date_operation DESC' );

 while($donnees = $reponse->fetch())
 {
	?>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                        <td><?php echo date_en_francais($row['Date_operation']); ?></td>
                        <td><?php echo $row['Status_commande']; ?></td>
                        <td><?php echo $row['Status_paiement']; ?></td>
                        <td><?php echo date_en_francais($row['Date_paiement']); ?></td>
                        <td><?php echo $row['N_Facture']; ?></td>
                        <td><?php echo date_en_francais($row['DATE_FACTURE']); ?></td>
                    </tr>  
            <?php
                    }
            ?>
            </tbody>
             <tfoot>
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
            </tfoot>
        </table> 
        <?php
 }
        $reponse->closeCursor();
        ?>

        <!--<div class="footer" style="font-family: Arial; position: fixed; left: 0; bottom: 0; width: 100%; background-color: grey; color: white; text-align: center">
            <p>Copyright Tous droits réservés<br/><br/>
            <a href="#">Me contacter !</a></p>
        </div>-->
    </body>
<script>
  $(document).ready(function () {
        $('#dtBasicExample').DataTable();
});
</script>

</html>
<?php
function date_en_francais($date_sql)
{
    $date_en_time = strtotime($date_sql);
    return date("d/m/Y", $date_en_time); 
}

?>
