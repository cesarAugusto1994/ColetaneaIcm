<?php

use App\Entities\Login;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/login', function (Request $request) use ($app) {

    return $app['twig']->render('login.html.twig', array(
        'error' => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));

})->bind('login');

$app->get('/register', function (Request $request) use ($app) {

    return $app['twig']->render('register.html.twig');

})->bind('register');

$app->get('/forgot-password', function (Request $request) use ($app) {

    return $app['twig']->render('forgot-password.html.twig');

})->bind('forgot-password');

$app->get('/user/', function () use ($app) {

    $usuario = $app['session']->get('user');

    if (!isset($usuario)) {
        $user = $app['usuarios.repository']->find($app['user']->getId());
        $app['session']->set('user', $user);
        $usuario = $app['session']->get('user');
        $app['session']->save();
    }

    $grupos = $app['grupo.repository']->findBy([], [], 2, 1);
    $playlists = $app['playlist.repository']->findBy(['usuario' => $usuario]);
    $favoritos = $app['favoritos.repository']->findBy(['usuario' => $usuario]);
    $colecoes = $app['colecao.repository']->findBy([]);
    $categorias = $app['categoria.repository']->findBy([], ['nome' => 'ASC']);

    return $app['twig']->render('user/index.html.twig', ['grupos' => $grupos, 'colecoes' => $colecoes, 'categorias' => $categorias, 'playlists' => $playlists, 'favoritos' => $favoritos]);
})->bind('homepage')->before(function () use ($app) {
        if (isset($app['user'])) {
            $app['session']->set('user', $app['user']);
            $app['session']->save();
        } else {
            return $app->redirect('login');
        }
    });

$app->get('/redirect', function () use ($app) {

    if (isset($app['user'])) {
        $app['session']->set('user', $app['user']);
        $app['session']->save();
    }

    $store = $app['security.token_storage']->getToken();

    if (!empty($store)) {

        $sessao = null;

        if ($app['session']->getId()) {
            $sessao = $app['session']->getId();
        }

        $token = $store;

        if ($token->getUser()) {

            //$usuario = $app['usuarios.repository']->find($token->getUser()->getId());
            /*
            $login = new Login();
            $login->setUsuario($usuario);
            $login->setSessao($sessao);
            $login->setDataLogin(new DateTime('now'));
            $app['db']->beginTransaction();
            $app['login.repository']->save($login);
            $app['db']->commit();
            */
            $app['session']->set('sessao', $sessao);
            $app['session']->set('user', $token->getUser());
            $app['session']->save();

        }
    }

    return $app->redirect('/user/');
})->bind('redirect')->before(function () use ($app) {
    if (isset($app['user'])) {
        $app['session']->set('user', $app['user']);
        $app['session']->save();
    }
});

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    /*
    if ($app['debug']) {
        return;
    }
*/
    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html',
        'errors/'.substr($code, 0, 2).'x.html',
        'errors/'.substr($code, 0, 1).'xx.html',
        'errors/default.html.twig',
    );

    return $app['twig']->render('errors/error.html.twig', ['code' => $code, 'message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
});

$app->post('/admin/login_check', function (\Symfony\Component\HttpFoundation\Request $request) use ($app) {

})->bind('login_check')->after(function () use ($app) {

    try {

    $store = $app['security.token_storage']->getToken();

    if (!empty($store)) {

        $sessao = null;

        if ($app['session']->getId()) {
            $sessao = $app['session']->getId();
        }

        $token = $store;

        if ($token->getUser()) {

            //$usuario = $app['usuarios.repository']->find($token->getUser()->getId());
            /*
            $login = new Login();
            $login->setUsuario($usuario);
            $login->setSessao($sessao);
            $login->setDataLogin(new DateTime('now'));
            $app['db']->beginTransaction();
            $app['login.repository']->save($login);
            $app['db']->commit();
            */
            $app['session']->set('sessao', $sessao);
            $app['session']->set('user', $token->getUser());
            $app['session']->save();

        }
    }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});

$app->get('/admin/logout', function () use ($app) {

})->bind('logout')->after(function () use ($app) {
    $app['session']->clear();
    return $app->redirect('/login');
});
/*
$app->get('/user', function () use ($app) {
    exit;
    return $app->redirect('/user/');
})->bind('redirect')->before(function () use ($app) {
    if (isset($app['user'])) {
        $app['session']->set('user', $app['user']);
        $app['session']->save();
    }
});
*/
$app->mount('/user/colecao', include __DIR__ . '/routes/colecao.php');
$app->mount('/user/categoria', include __DIR__ . '/routes/categoria.php');
$app->mount('/user/grupos', include __DIR__ . '/routes/grupos.php');
$app->mount('/user/musica', include __DIR__ . '/routes/musica.php');
$app->mount('/user/usuario', include __DIR__ . '/routes/usuarios.php');
$app->mount('/user/favoritos', include __DIR__ . '/routes/favoritos.php');
$app->mount('/user/playlists', include __DIR__ . '/routes/playlists.php');
$app->mount('/user/anexos', include __DIR__ . '/routes/anexos.php');
