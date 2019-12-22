<?php
if (!defined('ENVIRONMENT')) {
    $domain = strtolower($_SERVER['HTTP_HOST']);
    switch ($domain) {
        case 'fnpss.sch.ng':
        case 'www.fnpss.sch.ng':
            define('ENVIRONMENT', "production");
            break;
        default:
            define('ENVIRONMENT', "development");
            break;
    }
}
