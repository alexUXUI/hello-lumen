<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app)
{
    return $app->version();
});

$app->get('/test-endpoint', function ()
{
    return 'Hello World';
});

$app->get('/sample-page', function()
{
    if (view()->exists('sample')) {
      return view('sample', ['name' => 'Alex']);
    }
});

$featureCallback = function() {
  echo 'yolo dolo';
  return;
};

$app->get('/another-feature', $featureCallback);

$app->get('/feature-two', $featureCallback);
