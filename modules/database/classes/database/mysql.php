<?php defined('SYSPATH') OR die('No direct script access.');

class Database_MySQL extends Kohana_Database_MySQL {
    public static $alias;
    public static $sprtDbName;

    public function __construct($name, $config) {
        $con = $config['connection'];
        self::$sprtDbName = "$con[database]_support";
        parent::__construct($name, $config);
    }

    public function query($type, $sql, $as_object = FALSE, array $params = NULL) {
        $sql = str_ireplace('SUPPORT_ALIAS', self::$sprtDbName, $sql);
        return parent::query($type, $sql, $as_object, $params);
    }
}