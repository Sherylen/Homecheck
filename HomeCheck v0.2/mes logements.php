<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="mes logements.css" />
        <title>HomeCheck page d'accueil</title>
    </head>
    
    <body>
  
         <header>
            <form method="post" action="retour.php">
                <span>
                    <label for="logo"></label>
                    <input class="logo2" type="image" src="image/test.png">
                    <div class="HomeCheck">HomeCheck</div> 
                    <div class="YourHouse">Your house, in your pocket</div>
                </span>
            </form>
            <form method="post" action="traduction.php">
                <p>
                    <label for="langue1"></label>
                    <input class="langue1" type="image" src="image/francais.gif" title="Français" />
                </span>
                <span>
                    <label for="langue2"></label>
                    <input class="langue2" type="image" src="image/anglais.gif" title="English" />
                </span>
                </p>
            </form>
            
                <nav>
                     <a href="a propos de homecheck.html"><div class="propos"><span class="boite">  A propos de HomeCheck  </span></div></a>
                     <a href="mes logements.html"> <div class="propos"><span class="boite">  Mes logements  </span></div></a>
                      <a href="mon profil.html"><div class="propos"><span class="boite">  Mon profil  </span></div></a>
                     <a href="contactez-nous.html"> <div class="propos">    <span class="boite">  Contactez-nous  </span> </div></a>
                    <form method="^post" action="recherche.php">
                        <span class="rechercher">
                            <label for="recherche"></label>
                            <input type="search" name="recherche" id="recherche" placeholder="Rechercher" />
                            <input class="bouton" type="image" src="image/recherche.png" title="rechercher" />
                        </span>
                    </form>
                </nav>
            
            <form method="post" action="deconnexion.php">
                <p>
                    <label for="deconnexion"></label>
                    <input class="deconnexion" type="image" src="image/deconnexion.png" title="déconnexion" />
                </p>
                <div class="imageAdmin">
                 <img src="image/Msublime.jpg" alt="Administration" title="Admistrateur"  />
                 </div>
                <div class="barre" > M.Jérémie SUBLIME </div>  

            </form>
        </header>
 
      
        <div class="maison">
            
            <a href="logement choisi.html"> <div class=" image_maison"> 
                <img src="image/image_maison.jpg" alt="maison" title="Accès à votre maison"> </div> 
                
               
                <div class="text">
                 Maison 
                </br>
                Adresse (à prendre sur la base de donnée)
                </p>
                </div>
                <a/>
             

        </div>
      
        <div class="maison">
            <a href="logement choisi.html"> <div class=" image_appartement"> 
                <img src="image/image_appartement.jpg" alt="maison" title="Accès à votre appartement"> </div> 
                
                
                <div class="text"> Appartement
                </br>
                Adresse (à prendre sur la base de donnée)
                </p>
                </div>
                <a/>
             

        
        </div>
    
       
       
    </body>
    </br>
    </br>
    <footer>Tous droits réservés ©</footer>
    
</html>