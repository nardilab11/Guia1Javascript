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
        <form>
            <label>Ingrese su RUT:</label>
            <input id="rut" type="number" required>
            <label>-</label>
            <input name="dig" required> <br>
            <label>Ingrese su nombre:</label>
            <input name="nombre" required> <br>
            <label>Ingrese su edad:</label>
            <input name="edad" required> <br>
            <label>Elija su género:</label>
            <select name="genero">
                <option>Hombre</option>
                <option>Mujer</option>
                <option>Prefiero no decirlo</option>
            </select> <br>
            <button onclick="validarDatos();">Ingresar</button>
        </form>
    </body>
</html>
