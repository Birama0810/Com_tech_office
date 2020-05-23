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
            <h3><u>Suivie des opérations </u></h3>
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



 $reponse = $bdd->query('SELECT * FROM temp_suivie_vente order by Date_de_confirmation_de_expedition DESC' );

 while($donnees = $reponse->fetch())
 {
	?>
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Reference_commande </th>
                    <th>Date </th>
                    <th>Date_de_confirmation_de_expedition </th>
                    <th>Statut_commande </th>
                    <th>Montant_Produits </th>
                    <th>Type_Operation </th>
                    <th>Montant_frais_de_traitement </th>
                    <th>Montant_frais_de_livraison </th>
                    <th>Montant_total </th>
                    <th>Commissions </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = $reponse->fetch())
                {
                 ?>     
                    <tr>
                        <td><?php echo $row['Reference_commande']; ?></td>
                        <td><?php echo date_en_francais($row['Date']); ?></td>
                        <td><?php echo date_en_francais($row['Date_de_confirmation_de_expedition']); ?></td>
                        <td><?php echo $row['Statut_commande']; ?></td>
                        <td><?php echo $row['Montant_Produits']; ?></td>
                        <td><?php echo $row['Type_Operation']; ?></td>
                        <td><?php echo $row['Montant_frais_de_traitement']; ?></td>
                        <td><?php echo $row['Montant_frais_de_livraison']; ?> <strong>€</strong></td>
                        <td><?php echo $row['Montant_total']; ?></td>
                        <td><?php echo $row['Commissions']; ?></td>
                    </tr>  
            <?php
                    }
            ?>
            </tbody>
             <tfoot>
             <tr>
                 <th>Reference_commande </th>
                 <th>Date </th>
                 <th>Date_de_confirmation_de_expedition </th>
                 <th>Statut_commande </th>
                 <th>Montant_Produits </th>
                 <th>Type_Operation </th>
                 <th>Montant_frais_de_traitement </th>
                 <th>Montant_frais_de_livraison </th>
                 <th>Montant_total </th>
                 <th>Commissions </th>
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
