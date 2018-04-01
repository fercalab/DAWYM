<?php
class Session {

	public static function init() {

		session_start();
	}

	public static function destroy($clave = false) {

        if($clave) {

        	if (is_array($clave)) {
        		
        		for ($i=0;$i<count($clave);$i++) { 
        			
        			if (isset($_SESSION[$clave[$i]])) {
        				
        				unset($_SESSION[$clave[$i]]);
        			}
        		}
        	} else {

        		if (isset($_SESSION[$clave[$i]])) {
        				
        				unset($_SESSION[$clave[$i]]);
        			}
        	}
        } else {

        	session_destroy();
        }
	}

	public static function set($clave, $valor) {

        if(!empty($clave))  $_SESSION[$clave] = $valor;
    }
    
    public static function get($clave) {

        if(isset($_SESSION[$clave]))

            return $_SESSION[$clave];
    }

    public static function acceso($level) {

    	if (!Session::get('autorizado')) {
    		
    		header('location'.BASE_URL.'error/access/5050');
    		exit;
    	}

    	if (Session::getLevel($level) > Session::getLevel(Session::get('level')) ) {
    		
    		header('location'.BASE_URL.'error/access/5050');
    		exit;
    	}
    }

    public static function accesoView() {

    	if (!Session::get('autorizado')) {
    		
            return false;
    	}

    	if (Session::getLevel($level) > Session::getLevel(Session::get('level')) ) {
    		
    		return false;
    	}
    }

    public static function getLevel($level) {

    	$role['admin'] = 3;
    	$role['grupo'] = 2;
    	$role['usuario'] = 1;

    	if (!array_key_exists($level, $role)) {
    		
    		throw new Exception("Error de acceso", 1);
    		
    	} else {

    		return $role[$level];
    	}
    }

}

?>
