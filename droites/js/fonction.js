$(function (){
    $("#inscription_form").validate({
        rules: {

            nom_fnc: {
                required: true,
                minlength: 2

            },
            abr_fnc: {
                required: true,
                maxlength: 4

            },
            desc_fnc: {
                required: true,
                minlength: 2

            },
        },
        messages: {
            nom_fnc: {
                required: "Ce champ est requis",
                minlength: "Le nom doit comporter au minimum 2 caractères"
            },
            abr_fnc: {
                required: "Ce champ est requis",
                mixlength: "Le nom doit comporter au maximum 4 caractères"
            },
            desc_fnc: {
                required: "Ce champ est requis",
                minlength: "Le nom doit comporter au minimum 2 caractères"
            },
        },
        submitHandler: function(form){
            console.log("formulaire envoyé");


        $.post(
            "./json/add_fonction.json.php?_="+Date.now(),
            {
                nom_fnc:$("#nom_fnc").val(),
                abr_fnc:$("#abr_fnc").val(),
                desc_fnc:$("#desc_fnc").val(),
            },
            function result(data,status){
                $("#alert .message").html(data.messages.texte);
                $("#alert").attr("class", "alert")
                $("#alert").addClass("alert-" + data.messages.type);
                $("#alert").css("display", "block");
            }
        );
    }
    }
);
    $(".fnc_per").click(function(){
        $("#loading").css("display", "block");
        id_per = $(this).attr("id_per");
        id_fnc = $(this).attr("id_fnc");
        if($(this).is(":checked")){
            checked = 1;
        }else{
            checked = 0;
        }
        $.post(
            "./json/add_del_fnc_per.json.php?_="+Date.now(),
            {
                id_per:id_per,
                id_fnc:id_fnc,
                checked:checked
            },
            function result(data,status){
                $("#alert .message").html(data.messages.text);
                $("#alert").attr("class", "alert")
                $("#alert").addClass("alert-" + data.messages.type);
                $("#alert").css("display", "block");
            }
        ).always(function() {
                $("#loading").css("display", "none");
            }
        );

        if($(this).is(":checked")){
            console.log("Activer fnc_per "+id_fnc+" "+id_per)
        }else{
            console.log("Désactiver fnc_per "+id_fnc+" "+id_per)
        }
    });
});