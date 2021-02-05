<?php
namespace Cipriano\Core\service;


use Cipriano\Core\model\Cuenta;

use Cipriano\Core\model\MovimientoCuenta;

use Cose\Crud\service\ICrudService;

/**
 * interfaz para el servicio de MovimientoCuenta
 *
 * @author Bernardo
 * @since 27-05-2014
 *
 */
interface IMovimientoCuentaService extends ICrudService {


	function getMovimientos( Cuenta $cuenta, \Datetime $fecha = null);

	function getTotales( Cuenta $cuenta, \Datetime $fecha = null);

	function getTotalesMes( Cuenta $cuenta, \Datetime $fecha = null);

	function getTotalesAnioPorMes( Cuenta $cuenta, $anio);

}
