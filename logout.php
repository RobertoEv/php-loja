<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 7/28/16
 * Time: 9:57 PM
 */
require_once ("logica-usuario.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso";
header("Location: index.php");
die();