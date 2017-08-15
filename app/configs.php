<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 11:23
 */

$app['aplicacao.nome'] = function () {
    return 'Coletanêa';
};

$app['database'] = [
    'dbname' => 'blogcezzaar',
    'user' => 'cezzaar94',
    'password' => 'elpro1973',
    'host' => 'mysql857.umbler.com:41890',
    'driver' => 'pdo_mysql',
];

return $app;