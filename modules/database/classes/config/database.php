<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Transparent extension for the Kohana_Config_Database class
 *
 * @package    Kohana/Database
 * @category   Configuration
 * @author     Kohana Team
 * @copyright  (c) 2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Config_Database extends Kohana_Config_Database {}

$db_config = array(
    'dev_local' => array(
        'type'      => 'mysql',
        'connection' => array(
            'hostname'  => 'localhost',
            'username'  => 'username',
            'password'  => 'password',
            'database'  => 'db_name'
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
    'support' => array(
        'type'      => 'mysql',
        'connection' => array(
            'hostname'  => 'localhost',
            'username'  => 'username',
            'password'  => 'password',
            'database'  => 'SUPPORT_ALIAS'
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
);