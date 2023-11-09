<a href="bienvenido.php?usuario=Omar">bienvenido</a>
<form method="post" action="bienvenido.php">
    <input type="hidden" name="usuario" value="Omar"/>
    <input type="submit" value="guardar"/>
</form>
<?php
session_start();
$_SESSION["usuario"] = "Omar";