<?php
    // !defined('URL_MODE') && define('URL_MODE', 1);

    require_once ('init.php');
    include_once 'sql.php';
    $db = new Db();
    $db->query("SET NAMES 'UTF8'");
    $GLOBALS['db'] = $db;
    if (isset($_GET['a'])) {
        include_once 'header.php';
        include_once ltrim($_GET['a'], '/') . '.php';
        include_once 'footer.php';
        exit;
    }

    $url = 'list';
    if (headers_sent()) {
        printf('<script>window.location="%s";</script>', $url);
        exit;
    }
    header('Location: ' . $url);
    exit;

?>