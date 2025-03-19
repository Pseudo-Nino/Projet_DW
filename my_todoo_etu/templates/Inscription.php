<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="../static/globals.css" /> 
        <link rel="stylesheet" href="../static/style.css" />
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head> 
    <body>
        <div class="desktop">

          <div class="fi">
            <form action="#" method="POST">
                <div class="group1">
                    <div class="rectangle"></div>
        
                    <!-- Role -->
                    <fieldset>
                        <legend class="text-wrapper">INSCRIPTION</legend>
                        <img class="line" src="assets/horizontal-line.png" />
                        <img class="line-2" src="assets/horizontal-line.png" />
                        <label class="text-wrapper-4">
                            <input type="radio" name="role" value="etudiant" required> Étudiant
                        </label>
                        <label class="text-wrapper-6">
                            <input type="radio" name="role" value="pilote" required> Pilote
                        </label>
                        <label class="text-wrapper-5">
                            <input type="radio" name="role" value="entreprise" required> Entreprise
                        </label>
                    </fieldset>
        
                    <!-- Nom et Prénom -->
                    <label class="div" for="nom">Nom</label>
                    <input class="rectangle-4" type="text" name="nom" id="nom" placeholder="Votre nom" required>
        
                    <label class="text-wrapper-7" for="prenom">Prénom</label>
                    <input class="rectangle-5" type="text" name="prenom" id="prenom" placeholder="Votre prénom" required>
        
                    <!-- Adresse mail -->
                    <label class="text-wrapper-2" for="email">Adresse Mail</label>
                    <input class="rectangle-3" type="email" name="email" id="email" placeholder="exemple@mail.com" required>
        
                    <!-- Mot de passe -->
                    <label class="text-wrapper-3" for="password">Mot De Passe</label>
                    <input class="rectangle-6" type="password" name="password" id="password" placeholder="Mot de passe" required>
        
                    <!-- Vérification -->
                    <label class="text-wrapper-8" for="confirm-password">Vérification Mot De Passe</label>
                    <input class="rectangle-7" type="password" name="confirm-password" id="confirm-password" placeholder="Confirmez le mot de passe" required>
        
                    <!-- Etablissement -->
                    <label class="text-wrapper-10" for="etablissement">Établissement :</label>
                    <select class="rectangle-9" name="etablissement" id="etablissement" required>
                        <option value="Aix-en-Provence">Aix-en-Provence</option>
                        <option value="Angoulême">Angoulême</option>
                        <option value="Arras">Arras</option>
                        <option value="Bordeaux">Bordeaux</option>
                        <option value="Brest">Brest</option>
                        <option value="Caen">Caen</option>
                        <option value="Châteauroux">Châteauroux</option>
                        <option value="Dijon">Dijon</option>
                        <option value="Grenoble">Grenoble</option>
                        <option value="La Rochelle">La Rochelle</option>
                        <option value="Le Mans">Le Mans</option>
                        <option value="Lille">Lille</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Montpellier">Montpellier</option>
                        <option value="Nancy">Nancy</option>
                        <option value="Nantes">Nantes</option>
                        <option value="Nice">Nice</option>
                        <option value="Orléans">Orléans</option>
                        <option value="Paris-Nanterre">Paris-Nanterre</option>
                        <option value="Pau">Pau</option>
                        <option value="Reims">Reims</option>
                        <option value="Rouen">Rouen</option>
                        <option value="Saint-Nazaire">Saint-Nazaire</option>
                        <option value="Strasbourg">Strasbourg</option>
                        <option value="Toulouse">Toulouse</option>
                    </select>

                    <!-- Promotion -->
                    <label class="text-wrapper-9" for="promotion">Promotion</label>
                    <select class="rectangle-8" name="promotion" id="promotion" required>
                        <option value="CPI A1">CPI A1</option>
                        <option value="CPI A2">CPI A2</option>
                        <option value="Info A3">Info A3</option>
                        <option value="Info A4">Info A4</option>
                    </select>

                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LcxtMwqAAAAAGti-x2Yj3Kw7n_QXbPyRxMrgMpo"></div>
        
                    <!-- Bouton S'inscrire -->
                    <button type="submit" class="rectangle-2">
                        <span class="text-wrapper-11">S'inscrire</span>
                    </button>
        
                    <!-- Lien vers Connexion -->
                    <p class="compte">
                        <span class="span">Vous avez déjà un compte ? </span>
                        <a href="Connexion.php" class="text-wrapper-12">Se connecter</a>
                    </p>
                </div>
            </form>
        </div>
        

            <div class="siteweb2">
              <?php include 'navbar.php'; ?>
              <?php include 'header.php'; ?>
              <?php include 'main.php'; ?>
              <?php include 'footer.php'; ?>
      
            </div>

            
      
        </div>

        <!-- Lien fichier JS -->
        <script src="../static/script.js"></script>
    </body>
</html>

