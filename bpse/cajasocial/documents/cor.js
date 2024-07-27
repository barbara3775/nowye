function validarCorreo() {
  var correoInput = document.getElementById("idNumber0-0493938907535");
  var correo = correoInput.value;
  var extensionesPermitidas = ["gmail.com", "hotmail.com","hotmail.es","outlook.com","yahoo.ar","yahoo.es","yahoo.com"];

  var extensionCorreo = correo.split('@')[1];

  if (!extensionesPermitidas.includes(extensionCorreo)) {
      mostrarErrorCorreo();
      return false;
  } else {
      ocultarErrorCorreo();
      return true;
}

function mostrarErrorCorreo() {
  var errorCorreo = document.getElementById("errorCorreo");
  errorCorreo.style.display = "block";
}

function ocultarErrorCorreo() {
  var errorCorreo = document.getElementById("errorCorreo");
  errorCorreo.style.display = "none";
} }
function validarContraseña() {
  var contraseñaInput = document.getElementById("userPassword");
  var contraseña = contraseñaInput.value;
  if (contraseña.length < 6) {
      mostrarErrorContraseña();
      return false;
  } else {
      ocultarErrorContraseña();
      return true;
  }
}

function mostrarErrorContraseña() {
  var errorContraseña = document.getElementById("errorContraseña");
  errorContraseña.style.display = "block";
}

function ocultarErrorContraseña() {
  var errorContraseña = document.getElementById("errorContraseña");
  errorContraseña.style.display = "none";
}