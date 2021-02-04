<?php require_once 'includes/helpers.php'; ?>

<aside id="sidebar">

    <div id="login" class="bloque">
        <h3>Identifícate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email">
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <br>

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque">
        <?php if(isset($_SESSION['errores'])) {
            var_dump($_SESSION['errores']);
        }
        ?>

        <h3>Regístrate</h3>
        <form action="registro.php" method="POST">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
            <br>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
            <br>

            <label for="email">Email</label>
            <input type="text" name="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
            <br>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            <br>

            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores(); ?>
    </div>
</aside>