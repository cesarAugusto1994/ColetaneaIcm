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

$favoritos->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    /**
     * @var Musica $musica
     */
    $musica = $app['musica.repository']->findOneBy(['id' => $id, 'nome' => $nome]);
    $categoria = $app['categoria.repository']->findOneBy(['nome' => $musica->getCategoria()->getNome()]);

    $anexos = $app['musica.anexos.repository']->findBy(['musica' => $musica]);

    return $app['twig']->render('user/musica.html.twig', ['musica' => $musica, 'categoria' => $categoria, 'anexos' => $anexos]);

})->bind('favoritos');

return $favoritos;