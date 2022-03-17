<?php
require "../config/config.inc.php";
require WAY . "/include/head.inc.php";
?>
<div class="row">
    <div class="header">
        <h3>Fonctions</h3>
    </div>
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        Ajouter une fonction
    </div>

    <div class="panel-body">
        <form id="inscription_form" action="./json/add_fonction.json.php" method="post">
            <!--Nom-->
            <div class="form-group row">
                <label for="nom_fonc" class="col-sm-2 col-form-label">
                    Nom
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="nom_fonc" name="nom_fonc" placeholder="Nom de la fonction">
                </div>
            </div>
            <!--Abreviation de la fonction-->
            <div class="form-group row">
                <label for="abr_fonc" class="col-sm-2 col-form-label">
                    Abreviation de la fonction
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="abr_fonc" name="abr_fonc" placeholder="Abreviation">
                </div>
            </div>
            <!--Description de la fonction-->
            <div class="form-group row row-sm-3">
                <label for="desc_fonc" class="col-sm-2 col-form-label">
                    Description de la fonction
                </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="desc_fonc" name="desc_fonc" placeholder="Description"></textarea>
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