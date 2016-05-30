<?php


use simplephp\core\{Loader, App};

require CORE_PATH . 'core.LoadClass.php';

Loader::register();
App::init();