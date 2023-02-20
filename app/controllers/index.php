<?php

$blogposts = $app['database']->selectAll('blogi');

require_once('views/index.view.php');
