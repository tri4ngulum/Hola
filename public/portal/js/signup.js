function contraseña() {
  let password = document.getElementById('password').value;
  let repassword = document.getElementById('repassword').value;


  if (repassword != password) {
    document.getElementById('boton').disabled = true;
  } else {
    console.log('si jala')
    document.getElementById('boton').disabled = false;
  }
}

function usuario() {
  console.log('hola')
  let correo = document.getElementById('email').value;
  let contraseña = document.getElementById('password').value;

  if (correo !== '' && contraseña != '') {
    document.getElementById('nusuario').style.display = "inline";

    document.getElementById('email').value = correo;
    document.getElementById('notificaciones').innerHTML = "";

  } else {
    document.getElementById('notificaciones').innerHTML = "Ingresa bien todos los registros";
  }
}

function limpia() {
  document.getElementById('formuser').reset();
  document.getElementById('nuevore').reset();
  document.getElementById('nusuario').style.display = "none";
}