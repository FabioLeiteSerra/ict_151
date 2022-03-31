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
            <!--boutons-->
            <div class="form-group row">
                <div class="col-sm-6"></div>

                <div class="col-sm-3">
                    <button class="btn btn-primary">Se Connecter</button>
                </div>

                <div class="col-sm-1">
                    <button class="btn btn-warning">Annuler</button>
                </div>

                <div class="col-sm-1">
                    <button class="btn btn-secondary">S'inscrire</button>
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