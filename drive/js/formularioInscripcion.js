function validarNombreDocumento()
{
    valido = false;
    if (validarNombre())
    {
        
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