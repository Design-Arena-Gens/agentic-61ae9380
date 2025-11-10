<?php
require_once __DIR__ . '/config.php';

$mysqli = null;
if ($DB_HOST && $DB_USER && $DB_NAME) {
    $mysqli = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if (!$mysqli) {
        $mysqli = null; // fallback to null to enable sample data
    } else {
        mysqli_set_charset($mysqli, 'utf8mb4');
    }
}

function db_query($sql) {
    global $mysqli;
    if ($mysqli) {
        return mysqli_query($mysqli, $sql);
    }
    return false;
}

function db_escape($str) {
    global $mysqli;
    if ($mysqli) return mysqli_real_escape_string($mysqli, $str);
    return addslashes($str);
}
?>