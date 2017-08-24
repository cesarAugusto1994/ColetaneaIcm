<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 19/08/17
 * Time: 17:53
 */

$playlist = $app['controllers_factory'];

$playlist->get('/', function () use ($app) {

    $usuario = $app['session']->get('user');

    $playlists = $app['playlist.repository']->findBy(['usuario' => $usuario]);

    return $app['twig']->render("user/playlist/index.html.twig", ['playlists' => $playlists]);

})->bind('playlists');

$playlist->get('/{id}/{nome}', function ($id, $nome) use ($app) {

    $playlist = $app['playlist.repository']->find($id);
    $playlistMusicas = $app['playlist.musicas.repository']->findBy(['playlist' => $playlist]);

    return $app['twig']->render("user/playlist/playlist.html.twig", ['playlist' => $playlist, 'musicas' => $playlistMusicas]);

})->bind('playlist');

$playlist->get('/{id}/{nome}/play', function ($id, $nome) use ($app) {

    $playlist = $app['playlist.repository']->find($id);
    $playlistMusicas = $app['playlist.musicas.repository']->findBy(['playlist' => $playlist]);

    return $app['twig']->render("user/playlist/play.html.twig", ['playlist' => $playlist, 'musicas' => $playlistMusicas]);

})->bind('playlist_play');


return $playlist;