$('form').on('submit',function(e){
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