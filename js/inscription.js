$(function (){
    $.validator.addMethod("PWCHECK",
        function(value,element) {
            if(/^(?=.*?[A-Z]{1,})(?=(.*[a-z]){1,})(?=(.*[0-9]){1,})(?=(.*[$@$!%*?&]){1,}).{8,}$/.test(value)) {
                return true;
            } else {
                return false;
            }

        })

    $("#inscription_form").validate({
        rules: {

            nom_per: {
                required: true,
                minlength: 2

            },
            prenom_per: {
                required: true,
                minlength: 2

            },
            email_per: {
                required: true,
                email: true

            },
            password_conf: {
                required: true,
                equalTo:"#password"

            },
            password: {
                required: true,
                PWCHECK: true

            }
        },
        messages: {
            nom_per: {
                required: "Ce champ est requis",
                minlength: "Le nom doit comporter au minimum 2 caractères"
            },
            prenom_per: {
                required: "Ce champ est requis",
                minlength: "Le nom doit comporter au minimum 2 caractères"
            },
            email_per: {
                required: "Ce champ est requis",
                email: "Votre adresse doit correspondre au format d'adresse"
            },
            password: {
                required: "Ce champ est requis",
                PWCHECK: "mot de passe non-conventionnel"

            },
            password_conf: {
                equalTo: "Mots de passe non-identique",
                required: "Veuillez saisir le mot de passe ue seconde fois"
            }
        },
        submitHandler: function(form){
            console.log("formulaire envoyé");

            var news_letter = 0;
            if($("#new_letter").is(":checked")){
                news_letter = 1;
            }

            $.post(
                "./json/inscription.json.php?_="+Date.now(),
                {
                    nom_per:$("#nom_per").val(),
                    prenom_per:$("#prenom_per").val(),
                    email_per:$("#email_per").val(),
                    password:$("#password_conf").val(),
                    news_letter_per:news_letter,
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
});