function validar() {
    var empresa, telefono, correo, clave, direccion;
    empresa =
    empresa.getElementById("empresa").value;
    telefono = telefono.getElementById("telefono").value;
    correo = correo.getElementById("correo").value;
    clave = clave.getElementById("clave").value;
    direccion = direccion.getElementById("direccion").value;


    //* Expresión que permite validar el correo electrónico *//
    expresión = /\w+@\w+\.+[a-z]/;
    //* Condicional, valida que se debe escribir en todos los campos *//
    if (empresa === "" || telefono === "" || correo === "" || clave === "" || direccion === "") {
        alert("Todos los campos son obligatorios");
        return false;
    }
    //* Longitud de la empresa menor a 30 caractéres *//
    else if (empresa.length > 30) {
        alert("El nombre de la empresa es muy largo");
        return false;
    }
    //* Longitud del teléfono menor a 10 carácteres *//
    else if (telefono.length > 10) {
        alert("Teléfono muy largo");
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
    //* Longitud de dirección muy larga*//
    else if (direccion.length > 20) {
        alert("Dirección no valida");
        return false;
    }
}
