<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); }

// Environment-based configuration; set these in Vercel env vars
$DB_HOST = getenv('DB_HOST');
$DB_USER = getenv('DB_USER');
$DB_PASS = getenv('DB_PASS');
$DB_NAME = getenv('DB_NAME');

$FLW_PUBLIC_KEY = getenv('FLW_PUBLIC_KEY');
$FLW_SECRET_KEY = getenv('FLW_SECRET_KEY');

$ADMIN_USER = getenv('ADMIN_USER') ?: 'admin';
$ADMIN_PASS = getenv('ADMIN_PASS') ?: 'admin123';

$SITE_NAME = 'All In Packaging Solution (AIPS)';
$SITE_SLOGAN = 'Safety & Clean';
$PRIMARY_GREEN = '#00793B';
$PRIMARY_BLUE = '#1A237E';

$BASE_URL = rtrim((getenv('BASE_URL') ?: ''), '/');
?>