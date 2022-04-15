<?php

use senet\Router;

Router::add('^login$', ['controller' => 'Login', 'action' => 'index']);

Router::add('^case/(?P<action>[a-z0-9-]+)/?$', ['controller' => 'Case']);

Router::add('^$', ['controller' => 'Case', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');