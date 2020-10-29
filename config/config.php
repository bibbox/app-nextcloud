<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/nextcloud2023',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/nextcloud2023/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/nextcloud2023/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ochxgj3gdj6u',
  'passwordsalt' => 'gNyI8V+XTXuIsobuO5iRjcfz41GJb9',
  'secret' => 'H3jcy868jF834FMs8zIoIZb+aN8kTx7QPAi3g08UBmLd55jp',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'localhost:8010',

  ),
  'datadirectory' => '/var/www/html/nextcloud2023/data',
  'dbtype' => 'sqlite3',
  'version' => '14.0.14.1',
  'overwrite.cli.url' => 'http://localhost:8010/nextcloud2023',
  'installed' => true,
);

