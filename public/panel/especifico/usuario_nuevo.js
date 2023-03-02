$(function () {
    $('#form-usuario').validate({
      rules: {
        nombre: {
          required: true,
        },
        apellido_paterno: {
          required: true,
        },
        apellido_materno: {
          required: true,
        },
        sexo: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 8,
        },
        reppassword: {
          required: true,
          minlength: 8,
        },
        repassword: {
          required: true,
          minlength: 8,
        },
        rol: {
          required: true,
        },
      },
      messages: {
        nombre: {
          required: "Por favor introducir el nombre",
        },
        apellido_materno: {
          required: "Por favor introducir el apellido materno",
        },
        apellido_paterno: {
          required: "Por favor introducir el apellido paterno",
        }, 
        sexo: {
          required: "Por favor introducir el sexo",
        },
        email: {
          required: "Por favor introducir el email",
          email: "Introducir un email valido"
        },
        password: {
          required: "Por favor de introducir la contraseña",
          minlength: "La contraseña debes de tener un minimo de 8 caracteres"
        },
        repassword: {
          required: "Por favor de repetir la contraseña",
          minlength: "La contraseña debes de tener un minimo de 8 caracteres"
        },
        rol: {
          required: "Por favor de elegir la el rol",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  })