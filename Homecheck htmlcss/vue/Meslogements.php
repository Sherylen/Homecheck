<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SITE2.css" />
        <title>HomeCheck</title>
    </head>
    
    <body>

            <?php include 'header.php'; ?>
  
       <section>
      
        <div class="les2">

        <div class="logement">

            <a href="logementChoisi.php"> 
        <div class=" image_maison"> 
         
                <img src="image/image_maison.jpg" alt="maison" title="Accès à votre maison"> 
        </div> 
                
               
                <p class="info2">
                        Maison 
                        <br/>
                        Adresse (à prendre sur la base de donnée)
                </p>
       
         </a>
       </div>
       
        <div class="logement">

            <a href="logementChoisi.php"> 
            <div class=" image_appartement"> 
                <img src="image/image_appartement.jpg" alt="maison" title="Accès à votre appartement"> 
            </div> 
                
                
                <p class="info2">
                            Appartement
                            <br/>
                            Adresse (à prendre sur la base de donnée)
                </p>
            
            </a>

        </div>
  
        </div>
        </section>

            <?php include 'footer.php'; ?>
       
    </body>
  
    
</html>