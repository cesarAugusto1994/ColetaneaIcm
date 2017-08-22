<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/08/17
 * Time: 17:53
 */

$usuarios = $app['controllers_factory'];

$usuarios->get('/', function () use ($app) {

    $usuarios = $app['usuarios.repository']->findBy([]);

    return $app['twig']->render("user/usuario/index.html.twig", ['usuarios' => $usuarios]);

})->bind('usuarios');

$usuarios->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    $usuario = $app['usuarios.repository']->find($id);

    return $app['twig']->render("user/usuario/usuario.html.twig", ['usuario' => $usuario]);

})->bind('usuario');

return $usuarios;