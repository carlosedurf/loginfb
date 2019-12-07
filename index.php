<?php
require 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])){

    $res = $fb->get('/me?fields=email,name,id', $_SESSION['fb_access_token']);

    $r = json_decode($res->getBody());

    echo "MEU NOME: ".$r->name;

    echo "<br>";

    echo "<a href='sair.php'>Sair</a>";

}else{
    header("Location: login.php");
}