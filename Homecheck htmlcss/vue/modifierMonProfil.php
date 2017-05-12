<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SITE2.css" />
        <title>HomeCheck</title>
    </head>

    <body>

        <?php include 'header.php'; ?>
       
        <div>
          <div class="box7">
            
            <div method="post" action="modifier_photo.php">
                <p class="modif_photo">
                    <label for="photo_profil"></label>
                    <input type="image" src="image/Msublime.jpg" title="Modifier la photo de profil" alt="Photo de profil" />
                </p>

            </div>
            <form method="post" action="modifier_profil.php">
                <p class="modif">
                <table class="modifier">
                    <tr>
                        <td class="td3"><label for="nom">Nom </label></td>
                        <td class="td3"><input type="text" name="nom" id="nom"/></td>
                    </tr>
                    <tr>

                        <td class="td3"><label for="prenom">Prénom </label></td>
                        <td class="td3"><input type="text" name="prenom" id="prenom"/></td>
                    </tr>
                    <tr>
                
                        <td class="td3"><label for="date">Date de naissance </label></td>
                        <td class="td3"><input type="tel" name="date" id="date"/></td>
                    </tr>
                    <tr>
                        <td class="td3"><label for="tel">Téléphone </label></td>
                        <td class="td3"><input type="tel" name="tel" id="tel"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="Email">Email </label></td>
                        <td class="td3"><input type="email" name="email" id="email"/></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="adresse">Adresse </label></td>
                        <td class="td3"><input type="text" name="adresse" id="adresse"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="complement">Complément d'adresse </label></td>
                        <td class="td3"><input type="text" name="complement" id="complement"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="code_postal"> Code postal </label></td>
                        <td class="td3"><input type="tel" name="code" id="code"/></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="ville">Ville </label></td>
                        <td class="td3"><input type="texte" name="ville" id="ville"/></td>
                    </tr>
                 </table>
                    <br/>
                    <br/>
                </p>
          </form>
          </div>
            <input class="enregistrer" type="submit" value="Enregistrer" />
            
        
        
    
     </div>

         <?php include 'footer.php'; ?>
    </body>
</html>
