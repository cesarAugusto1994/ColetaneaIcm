<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/08/17
 * Time: 22:45
 */


$anexos = $app['controllers_factory'];

$anexos->get('{id}/{link}/{down}/download', function ($id, $link, $down) use ($app) {

    $anexo = $app['musica.anexos.repository']->find($id);
    if (!$anexo) {
        throw new Exception('Arquivo não encontrado.');
    }
    if ($down) {
        /*
        $anexosDown = new AnexoDownload();
        $anexosDown->setAnexo($anexo);
        $anexosDown->setUsuario($app['usuario']);
        $app['db']->beginTransaction();
        $app['anexo.download.repository']->save($anexosDown);
        $app['db']->commit();
        */
    }

    $url = '/assets/blog/musicas/' . $link;
    return $app->redirect($url);

})->bind('anexo_download')->value('down', false);

return $anexos;