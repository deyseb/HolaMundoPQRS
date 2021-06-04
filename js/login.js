$("password").keypress(function(e) {
    let code = (e.keycode ? e.keycode : e.which);
    if(code == 13){
        login();
        return false;
    }
}); 

function login() {
   $.ajax({
       data: {
           email: $('#email').val(),
           password: $('#password').val(),
       },
       type: "POST",
       url: "Controllers/login_ajax_controller.php",
       dataType: "json"   
   })
   .done(function(response) {
       if (response['flag']) {
          $(location).attr('href', 'home.php');
       } else {
           $("#div_mensaje").html(response['mensaje']);
       }
       console.log("ejecuto login");
})
.fail(function(jqXHR, textStatus, errorThrown) {
    console.log("fallo la solicitud: " + textStatus);
});

}