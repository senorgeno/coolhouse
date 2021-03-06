<?php

global $project;
$project = 'coolhouse';

global $database;
$database = 'webstudios_coolhouse';
require_once('conf/ConfigureFromEnv.php');


MySQLDatabase::set_connection_charset('utf8');

// Set the current theme. More themes can be downloaded from
// http://www.silverstripe.org/themes/
SSViewer::set_theme('simple');

// Set the site locale
i18n::set_locale('en_GB');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();