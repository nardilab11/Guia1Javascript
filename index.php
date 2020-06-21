<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guia 1 Javascript</title>
        <link href="CSS/CSS.css" rel="stylesheet" type="text/css"/>
        <script src="Javascript/JSFormulario.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="formulario">
            <label id="labelRut">Ingrese su RUT:</label>
            <input id="rut" type="number">
            
            <label id="labelDig">-</label>
            <input id="dig" type="text"> <br>
            
            <label id="labelNombre">Ingrese su nombre:</label>
            <input id="nombre" type="text"> <br>
            
            <label id="labelEdad">Ingrese su edad:</label>
            <input id="edad" type="number"> <br>
            
            <label id="labelGenero">Elija su género:</label>
            <select id="genero">
                <option>Hombre</option>
                <option>Mujer</option>
                <option>Prefiero no decirlo</option>
            </select> <br>
            <button id="boton" onclick="validarDatos();">Ingresar</button>
        </form>
    </body>
</html>
