<?php

require_once('twig_carregar.php');

echo $twig->render('index.html', [
    'estrela' => 'Sirius',
]);