$(function () {
    $('#form-cancion').validate({
      rules: {
        agrupacion: {
          required: true,
        },
        album: {
          required: true,
        },
        nombre_cancion: {
          required: true,
        },
        precio_cancion: {
          required: true,
          number: true
        },
        genero: {
          required: true,
        },
        id_usuario: {
          required: true
        }
      },
      messages: {
        id_usuario: {
          required: "Introducir el id de la cancion"
        },
        agrupacion: {
          required: "Por favor introducir la agrupacion",
        },
        album: {
          required: "Por favor introducir el album",
        },
        nombre_cancion: {
          required: "Por favor introducir el nombre de la cancion",
        }, 
        precio_cancion: {
          required: "Por favor introducir el precio de la cancion",
          number: "Introducir un numero"
        },
        genero: {
            required: "Por favor introducir el genero"
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