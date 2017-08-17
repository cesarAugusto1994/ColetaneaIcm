<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 16:21
 */

$colecao = $app['controllers_factory'];

$colecao->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    $colecao = $app['colecao.repository']->find($id);
    $categoria = $app['categoria.repository']->findBy(['colecao' => $colecao], ['nome' => 'ASC']);

    return $app['twig']->render('user/colecao.html.twig', ['categorias' => $categoria, 'colecao' => $colecao]);

})->bind('colecao');

return $colecao;