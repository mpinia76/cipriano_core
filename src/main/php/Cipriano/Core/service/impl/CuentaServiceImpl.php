<?php
namespace Cipriano\Core\service\impl;


use Cipriano\Core\model\MovimientoCuenta;

use Cipriano\Core\model\Cuenta;

use Cipriano\Core\criteria\CuentaCriteria;

use Cipriano\Core\model\Empleado;

use Cipriano\Core\service\ICuentaService;

use Cipriano\Core\dao\DAOFactory;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;
use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

/**
 * servicio para cuenta
 *
 *  @author Marcos
 * @since 02-08-2018
 *
 */
class CuentaServiceImpl extends CrudService implements ICuentaService {


	protected function getDAO(){
		return DAOFactory::getCuentaDAO();
	}

	function validateOnAdd( $entity ){

		//unicidad (numero + fecha + horaApertura )

	}


	function validateOnUpdate( $entity ){

		$this->validateOnAdd($entity);
	}

	function validateOnDelete( $oid ){}




}
