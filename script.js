// Función para validar la cédula ecuatoriana

function validarCedula(cedula) {
  if (cedula.length !== 10 || isNaN(cedula)) {
    return false;
  }

  const coeficientes = [2, 1, 2, 1, 2, 1, 2, 1, 2];
  let suma = 0;

  for (let i = 0; i < 9; i++) {
    let valor = parseInt(cedula.charAt(i)) * coeficientes[i];
    suma += (valor > 9) ? valor - 9 : valor;
  }

  const digitoVerificador = parseInt(cedula.charAt(9));
  const resultado = (suma % 10 === 0) ? 0 : 10 - (suma % 10);

  return resultado === digitoVerificador;
}

function validarCampoCedula() {
  
      var cedula = document.getElementById("cedula").value;
      var mensajeError = document.getElementById("mensajeError");

      if (validarCedula(cedula)) {
        mensajeError.textContent = "";
      } else {
        mensajeError.textContent = "La cédula ingresada es inválida.";
      }
} 


function validarCarrera() {
      var carrera = document.getElementById("carrera").value;
      var mensajeError = document.getElementById("mensajeError1");

      if (carrera == "Sistemas") {
        mensajeError.textContent = "";
      } else {
        mensajeError.textContent = "Error en carrera";
      }
}
