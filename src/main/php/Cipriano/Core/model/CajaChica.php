<?php

namespace Cipriano\Core\model;

use Cipriano\Core\utils\CiprianoUtils;

use Cose\model\impl\Entity;

use Cose\Security\model\User;

use Cose\utils\Logger;

/**
 * Caja chica
 *
 * @Entity @Table(name="cipriano_caja_chica")
 *
 *  @author Marcos
 * @since 02-08-2018
 */

class CajaChica extends Cuenta{

	//variables de instancia.




	public function __construct(){
	}

	public function __toString(){
		 return  "Caja Chica"; // .CiprianoUtils::formatMontoToView($this->getSaldo()) ;
	}



}
?>
