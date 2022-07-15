$(function(){
    $('#contact-form').submit(function(e){
        e.preventDefault();     // permet d'enlever le comportement par default lorsque l'on soumet le formulaire
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();  //recupere les infos de contact-form dans postdata

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json){

                if(json.isSuccess){
                    $("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $("#contact-form")[0].reset();
                }else{
                    $("#firstName + .comments").html(json.firstNameError);
                    $("#Name + .comments").html(json.NameError);
                    $("#mail + .comments").html(json.mailError);
                    $("#telephone + .comments").html(json.telephoneError);
                    $("#message + .comments").html(json.messageError);
                }
            }

        });
    });
})