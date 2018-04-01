<?php
class loginController extends Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {

        Session::set('autorizado', true);
        Session::set('level','usuario');


	}

	public function cerrar() {

		Session::destroy();
		$this->redireccionar();
	}
}
?>