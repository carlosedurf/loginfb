<?php

session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '2541122169467068',
    'app_secret' => 'b728656ec6ad85dfdb4499f3807a8683',
    'default_graph_version' => 'v2.10'
]);