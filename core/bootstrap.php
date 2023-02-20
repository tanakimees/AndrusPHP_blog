<?php

require('core/database/QueryBuilder.php');
require('core/App.php');
require('core/database/Connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

App::bind('config', require_once('config.php'));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view ( $name, $data = [] ) {

    extract($data);

    return require_once("app/views/{$name}.view.php");
    
}