<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 16:21
 */

use Symfony\Component\HttpFoundation\Response;

$categoria = $app['controllers_factory'];

$categoria->get('/{nome}', function ($nome) use ($app) {

    $categoria = $app['categoria.repository']->findOneBy(['nome' => $nome]);
    $musicas = $app['musica.repository']->findBy(['categoria' => $categoria], [], null, 1);

    return $app['twig']->render('user/categoria.html.twig', ['musicas' => $musicas]);

})->bind('categoria');

return $categoria;