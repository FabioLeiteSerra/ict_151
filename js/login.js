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
                $.post(
                    "./json/login.json.php?_=" + Date.now(),
                    {
                        email_per: $("#email_per").val(),
                        password: $("#password").val()
                    },
                    function result(data,status){
                        $("#alert .message").html(data.messages.texte);
                        $("#alert").attr("class", "alert")
                        $("#alert").addClass("alert-" + data.messages.type);
                        $("#alert").css("display", "block");
                        if(data.reponses) {
                            window.location.href = "index.php";
                        }

                    },
                    'json'
                );
            }
        }
    );
});