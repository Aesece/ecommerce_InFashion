$(document).ready(function() {
  var funcion;
  verificar_sesion();
    function verificar_sesion(){
        funcion = 'verificar_sesion';
        $.post('../Controllers/UsuarioController.php',{funcion},(response)=>{
            if(response!=''){
                location.href='../index.php';
            }

        })
    }
    $.validator.setDefaults({
        submitHandler: function () {
          let username = $('#username').val();
          let pass = $('#pass').val();
          let nombres = $('#nombres').val();
          let apellidos = $('#apellidos').val();
          let curp = $('#curp').val();
          let email = $('#email').val();
          let telefono = $('#telefono').val();
          funcion= 'registrar_usuario';
          $.post('../Controllers/UsuarioController.php',{username,pass,nombres,apellidos,curp,email,telefono,funcion}, (response) => {
            response=response.trim();
            if(response=="success"){
              Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Te has registrado correctamente',
                showConfirmButton: false,
                timer: 2000
              }).then (function(){
                $('#form-register').trigger('reset');
                location.href="../Views/login.php";
              })
            }else{
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal en el registro, contacte a un administrador',
               
              })
            }

          })


        }
      });
      //Regla valiacion letras
      jQuery.validator.addMethod("usuario_existente",
      function(value,element){
        let funcion = 'verificar_usuario';
        let bandera;
        $.ajax({
          type: "POST",
          url: "../Controllers/UsuarioController.php",
          data: 'funcion='+funcion+'&&value='+value,
          async: false,
          success: function(response){
            if(response=="success"){
              bandera = false;
            }else{
              bandera = true;
            }
          }
        })
        return bandera;
      },"El usuario ya esta registrado ");

      //Regla valiacion usuario repetido
      jQuery.validator.addMethod("letras",
      function(value,element){
        return /^[A-Za-z\s]+$/.test(value);
      },"*Este campo solo permite letras");

      $('#form-register').validate({
        rules: {
          username: {
            required: true,
            minlength: 6,
            maxlength: 15,
            usuario_existente: true
          },
          pass: {
            minlength: 6,
            maxlength: 20,
            required: true,
            
          },
          pass_repeat: {
            required: true,
            equalTo: '#pass',
          },
          email: {
            required: true,
            email: true,
          },
          nombres: {
              letras: true,
            required: true,
          },
          apellidos: {
            letras: true,
            required: true,
          },
          curp: {
            required: true,
            maxlength: 18,
          },
          telefono: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10,
          },
          terms: {
            required: true,
            
          },
        },
        messages: {
          username:{
            required: "Es obligatorio elegir un nickname",
            minlength: "El username debe tener al menos 6 caracteres",
            maxlength: "El username no debe exceder 15 caracteres"
          },
          pass:{
            required: "Es obligatorio elegir una contraseña",
            minlength: "La contraseña debe tener al menos 6 caracteres",
            maxlength: "La contraseña no debe exceder 15 caracteres"
          },
          pass_repeat:{
            required: "Este campo es obligatorio",
            equalTo: "Las contraseñas no coinciden"
          },
          email: {
            required: "Es oblgatorio ingresar un email",
            email: "Ingrese uun email valido"
          },
          nombres:{
            required: "Este campo es obligatorio",
          },
          apellidos:{
            required: "Este campo es obligatorio",
          },
          curp:{
            required: "Este campo es obligatorio",
            maxlength: "La CURP no debe exceder 18 caracteres"
          },
          telefono:{
            required: "Debe ingresar un telefono",
            digits: "El telefono no puede contener letras",
            minlength: "El numero de telefono es a 10 digitos",
            maxlength: "El numero de telefono es a 10 digitos"
          },
          terms: "Acepte los terminos del servicio"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-valid');
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
          $(element).addClass('is-valid');
        }
      });
})