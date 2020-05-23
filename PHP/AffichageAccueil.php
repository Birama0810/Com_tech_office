<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>L'appli_Com_Tech_Office</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
            .carousel-page
            {
            width:100%;
            height:400px;
            background-color:#5f666d;
            color:white;
            }
        </style>
    </head>
        
    <body>
        <div class="header" style="text-align: center; font-family: Arial">
        <h3>Bienvenue dans l'Appli Com_Tech_Office</h3>
        </div>

        <div id="my_carousel" class="carousel slide" data-ride="carousel">
            <!-- Bulles -->
            <ol class="carousel-indicators">
            <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my_carousel" data-slide-to="1"></li>
            <li data-target="#my_carousel" data-slide-to="2"></li>
            <li data-target="#my_carousel" data-slide-to="3"></li>
            </ol>
            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Page 1 -->
                <div class="item active">  
                    <div class="carousel-page">
                    <img src="images/accueil.png" class="img-responsive" style="margin:0px auto;" />
                    </div> 
                    <div class="carousel-caption">Acceuil</div>
                </div>
                <!-- Page 2 -->
                <div class="item">  
                    <div class="carousel-page">
                    <img src="images/commandes.jpg" class="img-responsive" style="margin:0px auto;" />
                    </div> 
                    <div class="carousel-caption">Commandes éffectuées</div>
                </div>
                <!-- Page 3 -->
                <div class="item">  
                    <div class="carousel-page">
                    <img src="images/operations.jpg" class="img-responsive" style="margin:0px auto;" />
                    </div> 
                    <div class="carousel-caption"><a href="operation.php">Opérations</a></div>
                </div>
                <!-- Page 4 -->
                <div class="item">  
                    <div class="carousel-page">
                    <img src="images/reports.png" class="img-responsive" style="margin:0px auto;" />
                    </div> 
                    <div class="carousel-caption">Rapports</div>
                </div>
            </div>
        </div>
        <div class="footer" style="font-family: Arial; position: fixed; left: 0; bottom: 0; width: 100%; background-color: grey; color: white; text-align: center">
            <p>Copyright Tous droits réservés<br />
            <a href="#">Me contacter !</a></p>
        </div>
        
    </body>
</html>
