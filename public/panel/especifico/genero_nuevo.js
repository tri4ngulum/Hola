$(function () {
    $('#form-genero').validate({
      rules: {
        genero: {
          required: true,
        },
      },
      messages: {
        genero: {
          required: "Por favor introducir el genero",
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