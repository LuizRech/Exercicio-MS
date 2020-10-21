$( document ).ready(function() {
    $("#loginContent").hide();
});

//Form registro
$('#formRegister').on('submit',function(e){
    e.preventDefault();
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : "submission.php",
        data     : {
            name: $("#name").val(),
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(data) {
            var response = JSON.parse(data);
            console.log(response);
            if (response['success']) {
                //Caso valide o usuário, é direcionado para a página Main
                window.location.replace("http://localhost/www/exercicio/pages/Main/main.php");
            } else {
               alert(response.error);
            }
        }
    });

});

//Form login

$('#formLogin').on('submit',function(e){
    e.preventDefault();
    $.ajax({
        type     : "POST",
        cache    : false,
        url      : "login.php",
        data     : {
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(data) {
            var response = JSON.parse(data);
            console.log(response);
            if (response['success']) {
                //Caso valide o usuário, é direcionado para a página Main
                window.location.replace("http://localhost/www/exercicio/pages/Main/main.php");
            } else {
               alert(response.error);
            }
        }
    });

});

$("#login").click(function(){
    $("#registerContent").hide();
    $("#loginContent").show();
})

$("#register").click(function(){
    $("#loginContent").hide();
    $("#registerContent").show();
})