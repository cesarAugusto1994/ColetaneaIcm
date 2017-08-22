<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 16:21
 */

use Symfony\Component\HttpFoundation\Response;

$categoria = $app['controllers_factory'];

$categoria->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    $categoria = $app['categoria.repository']->find($id);
    $musicas = $app['musica.repository']->findBy(['categoria' => $categoria], ['numero' => 'ASC', 'nome' => 'ASC']);

    return $app['twig']->render('user/categoria.html.twig', ['musicas' => $musicas, 'categoria' => $categoria]);

})->bind('categoria');

return $categoria;