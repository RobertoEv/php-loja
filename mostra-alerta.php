<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 7/30/16
 * Time: 12:43 AM
 */
session_start();
function mostraAlerta($tipo){
    if(isset($_SESSION[$tipo])){?>
        <p class="alert-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
        <?php unset($_SESSION[$tipo]);
    }
}