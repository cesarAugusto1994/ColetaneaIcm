<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 16:21
 */

$colecao = $app['controllers_factory'];

$colecao->get('/{nome}', function ($nome) use ($app) {

    $colecao = $app['colecao.repository']->findOneBy(['nome' => $nome]);
    $categoria = $app['categoria.repository']->findBy(['colecao' => $colecao], ['nome' => 'ASC']);

    return $app['twig']->render('user/colecao.html.twig', ['categorias' => $categoria]);

})->bind('colecao');

return $colecao;