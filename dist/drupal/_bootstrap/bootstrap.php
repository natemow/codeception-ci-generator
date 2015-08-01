<?php
// This file will be used by Codeception to bootstrap your Drupal app.
//
defined('BASE_DIR') || define('BASE_DIR', realpath(__DIR__ . '/../..'));
defined('APP_DIR') || define('APP_DIR', BASE_DIR . '/app');

// Include code coverage support for Codeception test suite.
include BASE_DIR . '/c3.php';

// TODO: Bootstrap Drupal just like /index.php would?

// Autoload all classes in TestPROJECT_CAMEL namespace.
\Codeception\Util\Autoload::addNamespace('TestPROJECT_CAMEL', BASE_DIR . '/tests/PROJECT');

// return $application;
