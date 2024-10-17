<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>registro de modalidad</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Enlace a jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</head>
<body class="form_body">
    
    <header  style="text-align: center;"> 
        <h1 style="color: white;">Registro de modalidad de Titlación</h1>
    </header>


    <div>
        <form action="./enviarRegistro.php" method="post" class="forms">

        <div >
        <a href="index.php" type="button" class="boton_regreso"><i class="material-icons">close</i></a>

    </div>
            <br>
            <div>
                <label for="nombre_usuario">Ingresa tu nombre(s): </label>
                <input type="text" name="nombre_usuario" required maxlength="30" placeholder="ingresa tu nombre(s)">
            </div>

            <div>
                <label for="apellido_usuario">ingresa tus apellidos</label>
                <input type="text" name="apellido_usuario" required maxlength="30" placeholder="ingresa tus apellidos">
            </div>

            <div>
                <label for="numero_cuenta">Numero de cuenta</label>
                <input type="number" name="numero_cuenta" required maxlength="30" placeholder="ingresa tu numero de cuenta">
            </div>

            <div>
                <label for="mail">Ingresa tu correo electronico: </label>
                <input type="mail" name="mail" required maxlength="100" placeholder="ingresa tu correo">
            </div>
            <br>

            <label>selecciona tu Plan de estudios</label>
  <br>
  <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>Planes</option>
    <option value="1">1921 </option>
    <option value="2">1272 </option>
    <option value="3">0082 </option>
  </select>

            <div class="input-field col s12">
                <br>
  <label>selecciona tu modalidad</label>
  <br>
  <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>modalidades</option>
    <option value="1">Alto nivel académico </option>
    <option value="2">Créditos de maestría </option>
    <option value="3">Desarrollo de un caso práctico </option>
    <option value="4">Examen general de conocimientos</option>
    <option value="5">Informe del ejercicio profesional </option>
    <option value="6">Memoria de desempeño de Servicio Social  </option>
    <option value="7">Seminarios y cursos de actualización y capacitación profesional  </option>
    <option value="8">Tesis </option>
  </select>
  <br>

            <div>
                <label for="mail">telefono: </label>
                <input type="tel" name="telefono" required maxlength="10" placeholder="ingresa tu telefono">
            </div>

            <input type="hidden" name="user_id" value="<?php echo isset($user_id) ? $user_id : ''; ?>">

            <button type="submit" name="submit">Registrarme</button>
            <button type="reset"> vaciar</button>
        </form>

</body>

<script src="app.js"></script>

</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>registro de modalidad</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Enlace a jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Enlace a Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</head>
<body class="form_body">
    
    <header  style="text-align: center;"> 
        <h1 style="color: white;">Registro de modalidad de Titlación</h1>
    </header>


    <div>
        <form action="./enviarRegistro.php" method="post" class="forms">

        <div >
        <a href="index.php" type="button" class="boton_regreso"><i class="material-icons">close</i></a>

    </div>
            <br>
            <div>
                <label for="nombre_usuario">Ingresa tu nombre(s): </label>
                <input type="text" name="nombre_usuario" required maxlength="30" placeholder="ingresa tu nombre(s)">
            </div>

            <div>
                <label for="apellido_usuario">ingresa tus apellidos</label>
                <input type="text" name="apellido_usuario" required maxlength="30" placeholder="ingresa tus apellidos">
            </div>

            <div>
                <label for="numero_cuenta">Numero de cuenta</label>
                <input type="number" name="numero_cuenta" required maxlength="30" placeholder="ingresa tu numero de cuenta">
            </div>

            <div>
                <label for="mail">Ingresa tu correo electronico: </label>
                <input type="mail" name="mail" required maxlength="100" placeholder="ingresa tu correo">
            </div>
            <br>

            <label>selecciona tu Plan de estudios</label>
  <br>
  <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>Planes</option>
    <option value="1">1921 </option>
    <option value="2">1272 </option>
    <option value="3">0082 </option>
  </select>

            <div class="input-field col s12">
                <br>
  <label>selecciona tu modalidad</label>
  <br>
  <select class="browser-default" style="background-color: gray">
    <option value="" disabled selected>modalidades</option>
    <option value="1">Alto nivel académico </option>
    <option value="2">Créditos de maestría </option>
    <option value="3">Desarrollo de un caso práctico </option>
    <option value="4">Examen general de conocimientos</option>
    <option value="5">Informe del ejercicio profesional </option>
    <option value="6">Memoria de desempeño de Servicio Social  </option>
    <option value="7">Seminarios y cursos de actualización y capacitación profesional  </option>
    <option value="8">Tesis </option>
  </select>
  <br>

            <div>
                <label for="mail">telefono: </label>
                <input type="tel" name="telefono" required maxlength="10" placeholder="ingresa tu telefono">
            </div>

            <input type="hidden" name="user_id" value="<?php echo isset($user_id) ? $user_id : ''; ?>">

            <button type="submit" name="submit">Registrarme</button>
            <button type="reset"> vaciar</button>
        </form>

</body>

<script src="app.js"></script>

</html>