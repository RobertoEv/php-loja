<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 7/28/16
 * Time: 9:57 PM
 */
include ("logica-usuario.php");
logout();
header("Location: index.php?logout=true");
die();