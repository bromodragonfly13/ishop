<?php


namespace ishop;


class DB
{
	use TSingletone;

	protected function __construct()
	{
		$db = require_once  CONF . '/config_db.php';
	}
}
