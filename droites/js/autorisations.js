$(function (){
    $("#inscription_form").validate({
            rules: {

                nom_aut: {
                    required: true,
                    minlength: 2

                },
                code_aut: {
                    required: true,
                    maxlength: 4

                },
                desc_user_aut: {
                    required: true,
                    minlength: 20

                },
                desc_admin_aut: {
                    required: true,
                    minlength: 20

                },
            },
            messages: {
                nom_aut: {
                    required: "Ce champ est requis",
                    minlength: "Le nom doit comporter au minimum 2 caractères"
                },
                code_aut: {
                    required: "Ce champ est requis",
                    mixlength: "Le nom doit comporter au maximum 4 caractères"
                },
                desc_user_aut: {
                    required: "Ce champ est requis",
                    minlength: "Le nom doit comporter au minimum 20 caractères"
                },
                desc_admin_aut: {
                    required: "Ce champ est requis",
                    minlength: "Le nom doit comporter au minimum 20 caractères"
                },
            },
            submitHandler: function(form){
                console.log("formulaire envoyé");


                $.post(
                    "./json/add_autorisations.json.php?_="+Date.now(),
                    {
                        nom_aut:$("#nom_aut").val(),
                        code_aut:$("#code_aut").val(),
                        desc_user_aut:$("#desc_user_aut").val(),
                        desc_admin_aut:$("#desc_admin_aut").val(),
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