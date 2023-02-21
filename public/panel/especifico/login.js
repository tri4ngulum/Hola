
$(function () {
    $('#form-login').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        email: {
          required: "Por favor introducir el email",
          email: "Email no es valido"
        },
        password: {
          required: "Por favor introducir la contraseña",
          minlength: "La contraseña no es valida"
        }
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
