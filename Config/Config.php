<?php
const BASE_URL = "http://localhost/ga";
//const BASE_URL = "http://ga.keyinsolutions.com";

//Zona horaria
date_default_timezone_set('America/Bogota');

//Datos de conexión a Base de Datos 
const DB_HOST = "localhost";
const DB_NAME = "db_ga";
//const DB_NAME = "u458620294_ga";
const DB_USER = "root";
//const DB_USER = "u458620294_ga";
const DB_PASSWORD = "";
//const DB_PASSWORD = "Adminkeyin123987";
const DB_CHARSET = "utf8";

//Para envío de correo
const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

//Datos envio de correo
const NOMBRE_REMITENTE = "Babalú";
const EMAIL_REMITENTE = "no-reply@babalufashion.com";
const NOMBRE_EMPESA = "Babalú";
const WEB_EMPRESA = "www.Babalú.co";

const DESCRIPCION = "";
const SHAREDHASH = "babalu";

//Datos Empresa
const DIRECCION = "";
const TELEMPRESA = "";
const WHATSAPP = "";
const EMAIL_EMPRESA = "";

//Datos para Encriptar / Desencriptar
const KEY = 'babalu';
const METHODENCRIPT = "AES-128-ECB";

//Envío
const COSTOENVIO = 5;

//Módulos
const MDASHBOARD = 1;
const MUSUARIOS = 2;
const MCLIENTES = 3;
const MARCHIVOS = 6;

//Roles
const RADMINISTRADOR = 1;
const RSUPERVISOR = 2;
const RCLIENTES = 3;

?>