<?php
use Cake\Cache\Cache;
/**
 * Test suite bootstrap for FootballData.
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);

    throw new Exception("Cannot find the root of the application, unable to run tests");
};
$root = $findRoot(__FILE__);
unset($findRoot);

chdir($root);

if (file_exists($root . '/config/bootstrap.php')) {
    require $root . '/config/bootstrap.php';

    return;
}
require $root . '/vendor/cakephp/cakephp/tests/bootstrap.php';

Cache::config('footballdata', [
    'className' => 'File',
    'duration' => '+1 seconds',
    'path' => '/tmp',
    'prefix' => 'footballdata_test_'
]);

//$connection = Cake\Datasource\ConnectionManager::get('test');
//var_dump($connection);
//Cake\Datasource\ConnectionManager::config('test', ['url' => getenv('DATABASE_TEST_URL')]);
