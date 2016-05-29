<?php

namespace simplephp;
use simplephp\core\Loader;

require CORE_PATH . 'core.LoadClass.php';

Loader::register();
App::init();