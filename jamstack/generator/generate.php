<?php

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/map.php';

foreach($pages as $pagePath => $page) {
    ob_start();
    $content = $page;
    include($pagePath);
    $fileData = ob_get_clean();
    file_put_contents(__DIR__ . '/../site/index.html', $fileData);
}