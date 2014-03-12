<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
$app['debug'] = true;
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/login', function () use ($app) {
    return $app['twig']->render('login.twig');
});
$app->post('/login', function (Request $request) use ($app) {
    $values = $request->get('login');

    if ($values['username'] == 'guiguiboy' && $values['password'] == 'plop') {
        return $app['twig']->render('login_success.twig', $values);
    } else {
        return $app['twig']->render('login.twig', array('message' => 'bad login/password provided'));
    }


});

$app->run();