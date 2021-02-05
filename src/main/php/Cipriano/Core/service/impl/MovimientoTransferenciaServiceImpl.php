<?php
namespace Cipriano\Core\service\impl;


use Cipriano\Core\model\Cuenta;

use Cipriano\Core\service\IMovimientoCuentaService;

use Cipriano\Core\model\MovimientoVenta;

use Cipriano\Core\service\ServiceFactory;

use Cipriano\Core\model\Caja;

use Cipriano\Core\model\Venta;

use Cipriano\Core\model\EstadoVenta;

use Cipriano\Core\service\IVentaService;

use Cipriano\Core\dao\DAOFactory;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;
use Cose\Security\model\User;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

/**
 * servicio para MovimientoTransferencia
 *
 *  @author Marcos
 * @since 02-08-2018
 *
 */
class MovimientoTransferenciaServiceImpl extends MovimientoCuentaServiceImpl {


	protected function getDAO(){
		return DAOFactory::getMovimientoTransferenciaDAO();
	}

	function getTotales( Cuenta $cuenta=null, \Datetime $fecha = null){

		$result = $this->getDAO()->getTotales($cuenta, $fecha);
		$totales = $result[0];
		return $totales["haber"] - $totales["debe"];

	}

}
