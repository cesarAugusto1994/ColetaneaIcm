<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 14/08/17
 * Time: 13:30
 */

$app['menu.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Menu::class);
};
$app['config.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Config::class);
};
$app['posts.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Posts::class);
};
$app['tags.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Tags::class);
};
$app['posts.links.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\LinksPosts::class);
};
$app['musica.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Musica::class);
};
$app['musica.anexos.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\MusicaAnexos::class);
};
$app['tipo.anexo.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Tipo::class);
};
$app['usuarios.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Usuarios::class);
};
$app['colecao.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Colecao::class);
};
$app['categoria.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Categoria::class);
};
$app['widgets.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Widgets::class);
};
$app['log.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Log::class);
};
$app['comentario.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Comentarios::class);
};
$app['album.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Album::class);
};
$app['favoritos.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Favoritos::class);
};
$app['email.confirmacao.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\EmailConfirmacao::class);
};
$app['status.email.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\StatusEmail::class);
};
$app['sugestao.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Sugestao::class);
};
$app['sugestao.resposta.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\SugestaoResposta::class);
};
$app['login.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Login::class);
};
$app['email.enviado.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\EmailEnviado::class);
};
$app['cidades.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Cidades::class);
};
$app['grupo.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Grupo::class);
};
$app['grupo.musicas.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\GrupoMusicas::class);
};
$app['grupo.usuarios.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\GrupoUsuarios::class);
};
$app['playlist.musicas.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\PlaylistMusicas::class);
};
$app['playlist.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Playlist::class);
};
$app['anexo.download.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\AnexoDownload::class);
};
$app['grupo.musicas.situacao.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\GrupoMusicaSituacao::class);
};
$app['notificacao.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\App\Entities\Notificacao::class);
};