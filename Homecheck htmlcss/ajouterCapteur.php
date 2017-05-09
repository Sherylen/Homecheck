<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="POPUP.css" />
        <script type="text/javascript" src="menu.js"></script>
        <title>HomeCheck</title>
    </head>
     <body>

            
<div class="carrec"> 

            <a href="capteursParPiece.php"> <img class="croix2" src="image/croix2.png" alt="fermeture" /> </a>
        <div class="formulaire">

            
            <span class=ajouttitre> Ajouter un capteur </span>
                <br/><br/><br/>


        
        <div class="formulaire2">
                <div class="capteur">
                        <form method="post" action="traitement.php">
                         <p>
                          <label for="pays">Choisissez un type de capteur <br/> <br/></label>
                    <select name="capteur" id="capteur">
                         <option value="humidité">Capteur d'humidité</option>
                         <option value="lumiere">Capteur de lumière</option>
                          <option value="pression">Capteur de pression</option>
                         <option value="autre">Autre capteur</option>
          
                    </select>
                        </p>
                        </form> 
                </div> <br/>

                <div class="reference">
                        <form method="post" action="traitement.php">
                             <p>
                         <label>Référence du capteur <br/> </label>  <br/> <input type="text" name="pseudo" placeholder="Numéro de série..."/><br/><br/><br/><br/>
                            </p>
                             </form>
                </div>
         </div>
       

        <div class="confirmation"><h3> Vous recevrez un mail de validation confirmant l'ajout demandé. <br/> Merci de votre confiance. </h3> 
        </div> <br/><br/>

        <a href="#">
        <div class="valider"> Valider 
        </div> </a> <br/> <br/> <br/>

        </div>

    </div>

    </body>
</html>

