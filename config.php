<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = $_ENV['CONFIG_DBHOST'] ?? 'localhost';
$CFG->dbname    = $_ENV['CONFIG_DBNAME'] ?? 'moodle';
$CFG->dbuser    = $_ENV['CONFIG_DBUSER'] ?? 'moodle';
$CFG->dbpass    = $_ENV['CONFIG_DBPASS'] ?? 'moodle';
$CFG->prefix    = $_ENV['CONFIG_PREFIX'] ?? 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => $_ENV['CONFIG_DBPORT'] ?? 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = $_ENV['CONFIG_WWWROOT'] ?? 'http://localhost';
$CFG->dataroot  = $_ENV['CONFIG_DATAROOT'] ?? '/moodle/data';
$CFG->admin     = $_ENV['CONFIG_ADMIN'] ?? 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
