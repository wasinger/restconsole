<?php

require(__DIR__ . '/vendor/autoload.php');

$req = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$url = $req->get('url');

$client = new GuzzleHttp\Client();

$options = [];
$content = $req->getContent();
if ($content) {
    $options['body'] = $content;
}

$res = $client->request($req->getMethod(), $url, $options);

$httpFoundationFactory = new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory();
$symfonyResponse = $httpFoundationFactory->createResponse($res);

$symfonyResponse->send();

