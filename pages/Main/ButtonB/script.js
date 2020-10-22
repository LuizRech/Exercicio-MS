$('#formOptionB').on('submit',function(e){
  e.preventDefault();
  $.ajax({
      type     : "POST",
      cache    : false,
      url      : "contador.php",
      data     : {
        nro: $("#nro").val()
      },
      success: function(data) {
        var response = JSON.parse(data);
        $('#retorno').html("");
       
        response.map(value => {
          $("#retorno").append(value +"<br/>");
        })
      }
  });
});

/*$("#buttonNro").click(function(){
  var val = $("#nro").val();
  $('#retorno').html("");
  
  for(var i = 0; i < val; i++){
    //Gera string com 10 caracteres aleatorios
    var oddString = Math.random().toString(36).slice(-10);

    //Replace da segunda letra por A e da nona letra por B
    var nstring = oddString.substring(0, 1) + "A" + oddString.substring(2, 8) + "B" + oddString.substring(9, 10);
      
    $("#retorno").append(nstring +"<br/>");
  }
})*/
