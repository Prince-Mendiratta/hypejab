<?php

use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();
$app->addRoutingMiddleware();

require __DIR__ . '/../src/app/index.php';
require __DIR__ . '/../src/app/robots.php';
require __DIR__ . '/../src/app/sitemap.php';
require __DIR__ . '/../src/app/vulnerabilities/Host Header Injection.php';
require __DIR__ . '/../src/app/vulnerabilities/Apache Tomcat Ghostcat CVE 2020-1938.php';
require __DIR__ . '/../src/app/vulnerabilities/Hidden File Sample.php';
require __DIR__ . '/../src/app/vulnerabilities/JSP Samples Page.php';
require __DIR__ . '/../src/app/vulnerabilities/Exposed Panels - CrushFTP.php';

$app->run();
