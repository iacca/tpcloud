function validarNombreDocumento()
{
    valido = false;
    if (validarNombre())
    {
        valido = true;
    }
    return valido;
}

function validarNombre()
{
    var inputTitulo = document.getElementById("docName");
    if (inputTitulo.value == "")
    {
        alert("Ingrese nombre para el documento");
        inputTitulo.focus();

        return false;
    } else
    {
        return true;
    }
}

function isValidEmail(mail)
{
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail);
}

function validarCorreoGmail()
{
    var email = document.getElementById("email");
    if (!isValidEmail(email.value)) {
        alert("Error: La dirección de correo " + email.value + " es incorrecta.");
        return false;
    } else {
        textoAreaDividido = email.value.split("@");
      
        if (textoAreaDividido[1] != "gmail.com") {
            alert("Error: La dirección de correo " + email.value + " es incorrecta. Debe ser @gmail.com ");
            return false;
        }
    }
    return true;
    }