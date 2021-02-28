 <!-- sondage -->
 <form method="POST">
     <div class="container-fluid mt-3">
         <div class="row">
             <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-12">
                                         <!-- input de l'email  -->
                                         
                                         <p class="mt-2">Ton Adresse Mail</p>
                                         
                                         <input type="email"
                                                class="p-3 m-0 input-inscript"
                                                size="30" 
                                                placeholder="Adresse Mail" 
                                                <?= isset($errorsArray['mail_error']) ? 'is-invalid' : ''?>
                                                name="mail" 
                                                pattern="[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+[^0-9]"  
                                                required>
                                                <p class="sizeMp text-danger"><?= $errorsArray['mail_error'] ?? ''?></p>

                                         <!-- input du mot de passe  -->
                                        
                                         <p class="mt-2">Ton Mot de passe</p>
                                         <input type="password"
                                                class="p-3 m-0 input-inscript" 
                                                size="30" 
                                                placeholder="Mot De Passe"
                                                name="password" 
                                                id="pass"
                                                <?= isset($errorsArray['password_error']) ? 'is-invalid' : ''?> 
                                                pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$"
                                                required>
                                               <button class="button-speak m-0" onclick="mp()"><img src="../../assets/img/oeil.svg"  class="img-fluid" width="30"  alt="oeil"> </button>

                                            <div class="sizeMP">
                                            <p class="text-danger"><?= $errorsArray['password_error'] ?? ''?></p> 
                                               <p>Dans le mot de passe il doit y avoir...</p>
                                                <ul>
                                                    <li>Minimum 8 caracteres</li>
                                                    <li>Des lettres Minuscule et Majuscule </li>
                                                    <li>Des chiffres </li>
                                                    <li>Des caracteres speciaux(#?!@$ %^&*-)</li>
                                                </ul>
                                            </div>

                                         <!-- input du retappage de mot de passe  -->
                                         
                                         <p class="mt-2">Retape le on sait jamais !</p>
                                         <input type="password"
                                                class="p-3 m-0 input-inscript" 
                                                size="30" 
                                                placeholder="Retape le on sait jamais !" 
                                                name="password"  
                                                id="rePass" 
                                                <?= isset($errorsArray['rePassword_error']) ? 'is-invalid' : ''?> 
                                                pattern="^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$"
                                                required>
                                                <button class="button-speak m-0" onclick="rmp()"><img src="../../assets/img/oeil.svg" class="img-fluid" width="30"  alt="oeil"> </button>
                                            <p class="sizeMP text-danger"><?= $errorsArray['rePassword_error'] ?? ''?></p>

                                        <p class="mt-4"> Votre Civilité :</p>
                                        <p class="sizeMP text-danger"><?= $errorsArray['gender_error'] ?? ''?> </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="container p-2">
                                 <div class="row">
                                     <div class="col-12">
                                         <!-- input radio de "homme"  -->
                                         <input type="radio" 
                                                class="p-3" id="male" 
                                                name="gender" 
                                                value="Homme" required>
                                         <label for="male">Homme</label><br>

                                         <!-- input radio de "femme"  -->
                                         <input type="radio" 
                                                class="p-3" 
                                                id="female" 
                                                name="gender" 
                                                value="Femme" required>
                                         <label for="female">Femme</label><br>

                                         <!-- input radio de "autre"  -->
                                         <input type="radio" 
                                                class="p-3" 
                                                id="other" 
                                                name="gender" 
                                                value="Autre"required>
                                         <label for="other">Autre</label>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                 <p class="mt-2">Ton pseudo :</p>

                 <!-- input du pseudo -->
                 
                 <input type="text" 
                        class="p-3 input-inscript" 
                        size="30" 
                        placeholder="Ton Pseudo" 
                        name="pseudo" 
                        pattern="^.{3,32}$" 
                        required
                        <?= isset($errorsArray['pseudo_error']) ? 'is-invalid' : ''?>>
                    <p class="sizeMp text-danger"><?= $errorsArray['pseudo_error'] ?? ''?></p>

                   
                         
                <!-- input  de l'anniversaire  -->
                 <p class="mt-5">Ton Anniversaire</p> 
                 <input type="date" 
                        class="p-3 mt-2 input-inscript birthday" 
                        size="30" 
                        placeholder="Date/Mois/Année" 
                        name="birthdate"
                        <?= isset($errorsArray['birthDate_error']) ? 'is-invalid' : ''?>
                        pattern="^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$"
                        required> 
                        <p class="sizeMp text-danger"><?= $errorsArray['birthDate_error'] ?? ''?></p>      
                        
                        
                 <input type="submit" class="mt-5 button-speak p-3 m-3" value="Creer son compte">
             </div>

         </div>
     </div>
 </form>