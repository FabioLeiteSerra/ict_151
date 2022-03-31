$(function () {
    $("#inscription_form").validate({
            rules: {

                email_per: {
                    required: true,
                    email: true

                },
                password: {
                    required: true,
                }
            },
            messages: {
                email_per: {
                    required: "Ce champ est requis",
                    email: "Votre adresse doit correspondre au format d'adresse"
                },
                password: {
                    required: "Ce champ est requis",

                },
            },
            submitHandler: function (form) {
                console.log("formulaire envoyé");

                var news_letter = 0;
                if ($("#new_letter").is(":checked")) {
                    news_letter = 1;
                }

                $.post(
                    "./json/inscription.json.php?_=" + Date.now(),
                    {
                        nom_per: $("#nom_per").val(),
                        prenom_per: $("#prenom_per").val(),
                        email_per: $("#email_per").val(),
                        password: $("#password_conf").val(),
                        news_letter_per: news_letter,
                    },
                );
            }
        }
    );
});
}