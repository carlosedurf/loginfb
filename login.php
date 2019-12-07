<?php
require 'fb.php';

$helper = $fb->getRedirectLoginHelper();

$permissions = array('email');

$loginurl = $helper->getLoginUrl('http://localhost/fblogin/callback.php', $permissions);

?>

<a href="<?= htmlspecialchars($loginurl); ?>">Fazer Login com facebook</a>