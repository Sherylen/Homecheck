<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SITE.css" />
        <title>HomeCheck</title>
    </head>

    <body>

      <?php include 'header.php'; ?>
        
        <section class="logementchoisi">

         <div class="carre" >
            
               <a href="capteursParPiece.php" > <img class=" plan" src="image/plan maison.jpg" alt="Plan de la maison" /></a>
          
              <ul class="liste"> 
                  <p> Adresses </p>
                  <p> Superficie </p>
                  <p> Nombre de pièces </p>
                  <p> Type de pièce </p>
                  <p> Nombre de personnes y vivant </p>
              </ul>
           
           
            <a href="gestionadmin.php" ><div class="admin"> <p class="texte"> Gestion des administrateurs </p></div></a>
             
         </div>

         </section>
          
         <?php include 'footer.php'; ?>

    
    </body>
   
</html>