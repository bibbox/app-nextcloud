<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/nextcloud7/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/nextcloud7/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/nextcloud7/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'passwordsalt' => '0bRMTdAD0hEWRvp3DE+E2UqUoYqPR/',
  'secret' => 'JoWKY9sQJNG+F/VlhABg5G+cAOgKgOt/eqtZhii7sBA0/QPE',
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '14.0.14.1',
  'overwrite.cli.url' => 'http://localhost:8010/nextcloud7/',
  'dbname' => 'nextcloud',
  'dbhost' => 'nextcloud-db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => 'www',
  'installed' => true,
);
