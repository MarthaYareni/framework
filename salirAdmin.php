
<?php
$salir=$_POST['salir'];

if (($administrador == 'administrador') AND ($contraseña == 'administrador')) {

    header ('Location: http://localhost/framework/inicio.html');

}else{
echo "Error al ingresar los datos,<br> <a href='loginAdmin.html'> volver al login </a>";
}
?>