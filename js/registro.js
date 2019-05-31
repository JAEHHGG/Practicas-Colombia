function validar() {
    var nombres, apellidos, correo, contraseña, repetir, documento, expresión;
    nombres = document.getElementById("nombres").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    contraseña = document.getElementById("clave").value;
    repetir = document.getElementById("repetir").value;
    documento = document.getElementById("documento").value;


    //* Expresión que permite validar el correo electrónico *//
    expresión = /\w+@\w+\.+[a-z]/;
    //* Condicional, valida que se debe escribir en todos los campos *//
    if (nombres === "" || apellidos === "" || correo === "" || clave === "" || repetir === "" || documento === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    //* Longitud del nombre menor a 30 caractéres *//
    else if (nombres.length > 30) {
        alert("Los nombres son muy largos");
        return false;
    }
    //* Longitud de los apellidos menor a 80 caractéres *//
    else if (apellidos.length > 80) {
        alert("Los apellidos son muy largos");
        return false;
    }
    //* Longitud del correo menor a 100 caractéres *//
    else if (correo.length > 100) {
        alert("El correo que escribió no está permitido");
        return false;
    }
    //* Validar que la expresión para el correo se aplique *//
    else if (!expresión.test(correo)) {
        alert("Correo No válido");
        return false;
    }
    //* Longitud de la contraseña menor a 20 caractéres *//
    else if (clave.length > 20) {
        alert("Contraseña muy larga");
        return false;
    }
    //* Longitud de repetir contraseña menor a 20 caractéres *//
    else if (repetir.length > 20) {
        alert("Contraseña muy larga");
        return false;
    }
    //* Longitud de la identificación menor a 20 caractéres *//
    else if (documento.length > 20) {
        alert("Documento No válido");
        return false;
    }
    //* Validación del campo Documento de identidad, solo se escriben números *//
    else if (isNaN(documento)) {
        alert("Número de Documento No válido");
        return false;
    }
    //* Se comprueba que las contraseñas sean las mismas *//
    else if (clave != repetir) {
        alert("Las dos claves No son iguales");
        return false;
    }
}
