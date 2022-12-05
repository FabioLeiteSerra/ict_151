<?php

session_start();
require("../config/config.inc.php");
//require(WAY . "/include/autoload.inc.php");
$autorisation = "ADM_AAA";
require (WAY.'/include/secure.inc.php');
require_once(WAY . "/include/head.inc.php");
?>

<div class="row">
    <div class="header">
        <h3></h3>
    </div>
</div>

<?php
$per = New Personne();
$tab_per=$per->get_all();
$fnc = New Fonction();
$tab_fnc = $fnc->get_all();

$tab_per_fnc = $fnc->get_tab_per_all_fnc()
?>

<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Attribution de fonctions
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>Nom, prénom</th>
                    <?php
                        foreach ($tab_fnc as $fonction):
                    ?>
                        <th> <?= $fonction['nom_fnc']?></th>
                    <?php
                        endforeach;
                    ?>
                </tr>
                <?php

//                    echo "<pre>";
//                    print_r($tab_fnc);
//                    echo "</pre>";
                    foreach ($tab_per as $user):
                ?>
                <tr>
                    <td><?= $user['nom_per'] ?> <?= $user['prenom_per'] ?></td>
                    <?php foreach ($tab_fnc AS $fonction): ?>
                    <td>
                        <input type="checkbox" class="form-input fnc_per" id_per="<?=$user['id_per']?>" id_fnc="<?=$fonction['id_fnc']?>"
                        <?php
                        if(isset($tab_per_fnc[$fonction['id_fnc']])) {
                            if (in_array($user['id_per'], $tab_per_fnc[$fonction['id_fnc']])) {
                                echo "checked";
                            }
                        }
                        ?>
                        >
                    </td>
                    <?php endforeach;?>
                </tr>
                <?php
                endforeach;
                ?>
            </table>
        </div>
    </div>
</div>
<script src="./js/fonction.js"></script>