<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/08/17
 * Time: 17:53
 */

$grupos = $app['controllers_factory'];

$grupos->get('/', function () use ($app) {

    $grupos = $app['grupo.repository']->findBy([]);

    return $app['twig']->render("user/grupo/index.html.twig", ['grupos' => $grupos]);

})->bind('grupos');

$grupos->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    $grupo = $app['grupo.repository']->find($id);
    $grupoMusicas = $app['grupo.musicas.repository']->findBy(['grupo' => $grupo]);
    $grupoUsuarios = $app['grupo.usuarios.repository']->findBy(['grupo' => $grupo]);

    return $app['twig']->render("user/grupo/grupo.html.twig", ['grupo' => $grupo, 'musicas' => $grupoMusicas, 'usuarios' => $grupoUsuarios]);

})->bind('grupo');

return $grupos;