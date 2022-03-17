<?php
    require "./config/config.inc.php";
    require WAY . "/include/head.inc.php";
?>
<script src="./js/inscription.js"></script>
  <div class="row">
    <div class="header">
      <h3>Inscription</h3>
  </div>
  </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Inscription au portail de jeux
        </div>


    <div class="panel-body">
        <form id="inscription_form" action="check.php" method="post">
            <!--nom-->
            <div class="form-group row">
                <label for="nom_per" class="col-sm-2 col-form-label">
                    Nom
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="nom_per" name="nom_per" placeholder="votre_nom">
                </div>
            </div>
            <!--prénom-->
            <div class="form-group row">
                <label for="prenom_per" class="col-sm-2 col-form-label">
                    Prénom
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="prenom_per" name="prenom_per" placeholder="votre prénom">
                </div>
            </div>
            <!--email-->
            <div class="form-group row">
                <label for="email_per" class="col-sm-2 col-form-label">
                    E-mail
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="email_per" name="email_per" placeholder="votre aresse e-mail">
                </div>
            </div>
            <!--mot de passe-->
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">
                   Mot de passe
                </label>
                <div class="col-sm-10">
                    <input  type="password" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                </div>
            </div>
            <!--mot de passe2-->
            <div class="form-group row">
                <label for="password_conf" class="col-sm-2 col-form-label">
                    Mot de passe (Confirmation)
                </label>
                <div class="col-sm-10">
                    <input  type="password" class="form-control" id="password_conf" name="password_conf" placeholder="saisissez votre mot de passe une seconde fois">
                </div>
            </div>
            <!--checkbox-->
            <div class="form-group row">
                <div class="col-sm-2"></div>
                    <div class="col-sm-5">
                        <input  type="checkbox"  id="new_letter" name="new_letter" placeholder="saisissez votre mot de passe une seconde fois">
                        <label for="new_letter" >
                            La formation d'informaticien m'intéresse
                        </label>
                    </div>
            </div>

            <!--boutons-->
            <div class="form-group row">
            <div class="col-sm-8"></div>

                <div class="col-sm-2">
                    <button class="btn btn-primary">S'inscrire</button>
                </div>
                <div class="col-sm-2 ">
                    <button class="btn btn-warning">Annuler</button>
                </div>
            </div>

        </form>
    </div>
        <div class="panel-footer">
        </div>

    </div>
  </div>
</body>
</html>