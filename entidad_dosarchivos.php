<?php

include_once("configuracion_sistema/configuracion.php");
include_once 'librerias/PDOConsultas.php'; 
echo "hola";
$consulta = new PDOConsultas();
$consulta->connect($CFG_HOST[0], $CFG_USER[0], $CFG_DBPWD[0], $CFG_DBASE[0], $CFG_TIPO[0]);

$prueba = $consulta->executeQuery("SELECT a.cve_peticion,a.clave_sp,a.nombre, a.rfc,a.codigo_post, b.curp,c.des_estatus, b.email
FROM det_peticiones a
INNER JOIN dt_sp_erroneos b ON a.clave_sp = b.clave_sp
INNER JOIN cat_estatus c ON b.cve_estatus = c.cve_estatus 
WHERE c.cve_estatus = 3");

print_r($prueba);

