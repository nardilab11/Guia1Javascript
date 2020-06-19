
function validarDatos(){
    var correcto = true;
    document.get
    var rut = document.getElementByName("rut");
    var digito = document.getElementById("dig");
    var nombre = document.getElementById("nombre");
    var edad = document.getElementById("edad");
    
    
    if(rut == null){
        alert("Ingrese todos los datos");
        correcto = false;
    }
    
    if(correcto){
        document.location.href = "Correcto.php";
    }else{
        alert("No correcto");
    }
}


