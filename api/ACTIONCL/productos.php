<?php
	$ru0='../';
	$dbs='database';
	$cl1='productos';
	$di1='productos/';

	function index($rut){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		//require_once('../MORENOKU/productos.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		//$_dbs = new database();

		$inf = $_cl1->listar($_dbs->connect());

		return $inf;
	}
	function nuevo($rut,$nombre_produto,$descripcion_producto,$imagen_precio,$precio_producto){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		//require_once('../MORENOKU/productos.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		//$_dbs = new database();

		$inf = $_cl1->add($_dbs->connect(),$nombre_produto,$descripcion_producto,$imagen_precio,$precio_producto);

		return $inf;
	}
	function llamar($rut,$pid){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		//require_once('../MORENOKU/productos.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		//$_dbs = new database();

		$inf = $_cl1->callID($_dbs->connect(),$pid);

		return $inf;
	}
	function editar($rut,$pid,$nombre_produto,$descripcion_producto,$imagen_precio,$precio_producto){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		//require_once('../MORENOKU/productos.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		//$_dbs = new database();

		$inf = $_cl1->edit($_dbs->connect(),$pid,$nombre_produto,$descripcion_producto,$imagen_precio,$precio_producto);

		return $inf;
	}
	function eliminar($rut,$pid){
		global $dbs,$cl1;
		require_once($rut.DIRMOR.$dbs.'.php');
		require_once($rut.DIRMOR.$cl1.'.php');
		//require_once('../MORENOKU/productos.php');
		$_dbs = new $dbs();
		$_cl1 = new $cl1();
		//$_dbs = new database();

		$inf = $_cl1->drop($_dbs->connect(),$pid);

		return $inf;
	}