//afficher les div au click dans contact
$(".btn1").click( function(){
    $("#moi").toggle();
});

$(".btn2").click( function(){
    $("#contact").toggle();
});

$(".btn3").click( function(){
    $("#message").toggle();
});

//envoi
function ValidateEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
};
//lorsque l'envoi est validé affiche un message
$(".btn-envoi").click(function () {
    if (!ValidateEmail($("#email").val())) {
        //
        $("#email").css("border-color", "red");
    }
    else {

        $.ajax({
            url : '/contact',
            type : 'POST', // Le type de la requête HTTP, ici devenu POST
            data : 'email=' + $("#email").val() + '&message=' + $("#text").val() + '&name=' + $("#nom").val() , // On fait passer nos variables, exactement comme en GET, au script more_com.php
            dataType : 'html'
        });


        $(".form-contact").replaceWith("<p>Votre message a été envoyé.</p>");
    }
});
//FIN FORM CONTACT//FIN FORM CONTACT