<?php
class Archivos extends Controllers
{
	public function __construct()
	{
		parent::__construct();
		session_start();
		//session_regenerate_id(true);
		if (empty($_SESSION['login'])) {
			header('Location: ' . base_url() . '/login');
			die();
		}
		getPermisos(MARCHIVOS);
	}

	public function Archivos()
	{
		if (empty($_SESSION['permisosMod']['r'])) {
			header("Location:" . base_url() . '/archivos');
		}
		$data['page_tag'] = "Archivos";
		$data['page_title'] = "ARCHIVOS <small>Babalú</small>";
		$data['page_name'] = "archivos";
		$data['page_functions_js'] = "functions_archivos.js";
		$this->views->getView($this, "archivos", $data);
	}

}


?>