   <!-- partie gauche du site -->
    <div class="container-fluid fadeInLeft">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-7">
          <div class="container mt-3">
            <div class="text-center">
              <h2>Bienvenue <?= $pseudo ?></h2>
              <h3>Bravo vous etes inscris !</h3>
              <h4>Recapitulatif de votre inscription</h4>
              <p>Vous allez maintenant recevoir un mail de confirmation</p>
              <p>Civilité :
                <?php if($gender=='Homme'){
                      echo "Homme";
                    }else if($gender=='Femme'){
                      echo "Femme";
                    }else{
                      echo "Autre";
                    }
              ?></p>
              <p>Votre Email : <?=$mail ?? 'Vous n\'avez rien mis'?></p>
              <p>Votre Anniversaire : <?= $birthDate; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>