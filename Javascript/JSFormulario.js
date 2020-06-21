
function validarDatos(){
    var correcto = true;
    var rut = document.getElementById("rut");
    var digito = document.getElementById("dig");
    var nombre = document.getElementById("nombre");
    var edad = document.getElementById("edad");
    
    //Validación RUT
    if(rut.value === "" || rut.value.length !== 8){
        alert("RUT no válido. Ingrese su RUT otra vez");
        correcto = false;
    }
    if(digito.value === "" || digito.value.length > 1){
        alert("Ingrese un dígito verificador de RUT válido");
        correcto = false;
    }
    //Validación nombre
    if(nombre.value === "" || nombre.value.length > 30 || nombre.value.length < 5){
        alert("Ingrese un nombre válido (mínimo 5 y máximo 30 caracteres)");
        correcto = false;
    }
    //Validación edad
    if(edad.value === "" || edad.value > 80 || edad.value < 18){
        alert("Ingrese una edad válida (mínimo 18 y máximo 80 años)");
        correcto = false;
    }
    //¿Enviar formulario?
    if(correcto){
        alert("Formulario enviado");
        //document.location.href = "../Correcto.php";
    }else{
        alert("Formulario no enviado");
    }
    
    
}


