<?php
session_start();
require "../config/config.inc.php";
$autorisation = "FNC_ADM";
require (WAY.'/include/secure.inc.php');
require WAY . "/include/head.inc.php";
?>
<script src="./js/fonction.js"></script>
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
        <form id="inscription_form" method="post">
            <!--Nom-->
            <div class="form-group row">
                <label for="nom_fnc" class="col-sm-2 col-form-label">
                    Nom
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="nom_fnc" name="nom_fnc" placeholder="Nom de la fonction">
                </div>
            </div>
            <!--Abreviation de la fonction-->
            <div class="form-group row">
                <label for="abr_fnc" class="col-sm-2 col-form-label">
                    Abreviation de la fonction
                </label>
                <div class="col-sm-10">
                    <input  type="text" class="form-control" id="abr_fnc" name="abr_fnc" placeholder="Abreviation">
                </div>
            </div>
            <!--Description de la fonction-->
            <div class="form-group row row-sm-3">
                <label for="desc_fnc" class="col-sm-2 col-form-label">
                    Description de la fonction
                </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="desc_fnc" name="desc_fnc" placeholder="Description"></textarea>
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