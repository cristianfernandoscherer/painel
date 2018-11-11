<?php
class db{

	private static $instance = NULL;

    function __construct() {}

    public static function getInstance() {
	    if (!self::$instance) {
	        self::$instance = new PDO(DB_DATABASE, DB_USERNAME, DB_PASSWORD);
	        self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
	    }

	    return self::$instance;
	}

	public static function close() {
	    if (self::$instance) {
	        self::$instance = null;
	    }
	}
}

?>