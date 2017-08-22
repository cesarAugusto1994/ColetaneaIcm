<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 16:21
 */

use App\Entities\Musica;
use Symfony\Component\HttpFoundation\Response;

$favoritos = $app['controllers_factory'];

$favoritos->get('/', function () use ($app) {

    $usuario = $app['session']->get('user');

    $favoritos = $app['favoritos.repository']->findBy(['usuario' => $usuario]);
    return $app['twig']->render('user/favorito/index.html.twig', ['favoritos' => $favoritos]);

})->bind('favoritos');

return $favoritos;