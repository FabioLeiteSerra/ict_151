<?php
require "../config/config.inc.php";
require WAY . "/include/head.inc.php";
?>
<script src="./js/autorisations.js"></script>
<div class="row">
    <div class="header">
        <h3>Autorisations</h3>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Ajouter une autorisation
    </div>

<div class="panel-body">
    <form id="inscription_form" method="post">
        <!--Nom-->
        <div class="form-group row">
            <label for="nom_aut" class="col-sm-2 col-form-label">
                Nom
            </label>
            <div class="col-sm-10">
                <input  type="text" class="form-control" id="nom_aut" name="nom_aut" placeholder="Nom de l'autorisation">
            </div>
        </div>
        <!--Code de l'autorisation-->
        <div class="form-group row">
            <label for="code_aut" class="col-sm-2 col-form-label">
                Code de l'autorisation
            </label>
            <div class="col-sm-2">
                <input  type="text" class="form-control" id="code_aut" name="code_aut" placeholder="XXX">
            </div>
        </div>
        <!--Description de l'autorisation pour un administrateur-->
        <div class="form-group row row-sm-3">
            <label for="desc_admin_aut" class="col-sm-2 col-form-label">
                Description de l'autorisation pour un administrateur
            </label>
            <div class="col-sm-10">
                <textarea class="form-control" id="desc_admin_aut" name="desc_admin_aut" placeholder="Description"></textarea>
            </div>
        </div>
<!--        Description de l'autorisation pour un utilisateur-->
        <div class="form-group row">
            <label for="desc_user_aut" class="col-sm-2 col-form-label">
                Description de l'autorisation pour un administrateur
            </label>
            <div class="col-sm-10">
                <textarea class="form-control" id="desc_user_aut" name="desc_user_aut" placeholder="Description"></textarea>
            </div>
        </div>

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