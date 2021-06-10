<?php //Spanish Language Pack 8859-1: http://zencartspanish.svn.sourceforge.net/viewvc/zencartspanish/
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: sqlpatch.php 4138 2006-08-14 05:56:44Z drbyte $
//
  define('HEADING_TITLE','Ejecutor de consultas SQL');
  define('HEADING_WARNING','ASEG�RESE DE HACER UNA COPIA DE SEGURIDAD COMPLETA DE SU BASE DE DATOS ANTES DE EJECUTAR SCRIPTS AQU�');
  define('HEADING_WARNING2','Si est� instalando una contribuci�n de terceros, tenga en cuenta que lo hace bajo su propia responsabilidad.<br />Zen Cart&trade; no ofrece ninguna garant�a sobre la seguridad de los scripts suministrados por terceros. �Pru�belos antes de instalarlos en su Tienda!');
  define('HEADING_WARNING_INSTALLSCRIPTS', 'AVISO: No debe ejecutar scripts para actualizar la base de datos Zen Cart desde esta p�gina.<br />Para asegurar un proceso lo m�s fiable suba la nueva carpeta <strong>zc_install</strong> al servidor y ejecute la actualizaci�n desde esa ubicaci�n.');
  define('TEXT_QUERY_RESULTS','Resultados de la consulta:');
  define('TEXT_ENTER_QUERY_STRING','Escriba la consulta <br />a ser ejecutada:&nbsp;&nbsp;<br /><br />Aseg�rese de<br />terminar con ;');
  define('TEXT_QUERY_FILENAME','Subir archivo:');
  define('ERROR_NOTHING_TO_DO','Error: Nada que hacer - no se especifi� consulta o archivo de consulta.');
  define('TEXT_CLOSE_WINDOW', '[ cerrar ventana ]');
  define('SQLPATCH_HELP_TEXT','La herramienta SQLPATCH le permite instalar parches del sistema pegando c�digo SQL directamente en la zona de texto '.
                              'de aqu�, o subiendo un archivo de script suministrado (.SQL).<br />' .
                              'Al preparar scripts para ser utilizados con esta herramienta, NO incluya un prefijo de tabala, ya que esta herramienta ' .
                              'insertar� autom�ticamente el prefijo requerido para la base de datos activa, basado en los par�metros en el archivo ' .
                              'admin/includes/configure.php de la tienda (definici�n DB_PREFIX).<br /><br />' .
                              'Los comandos introducidos o subidos s�lo pueden empezar con las siguientes sentencia, y DEBEN estar en MAY�SCULAS:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (s�lo una tabla)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>' . 
'<h2>Advanced Methods</h2>Los siguientes m�todos se ueden utilizar para sentencias m�s complejas si es necesario::<br />
Para ejecutar algunos bloques de c�digo juntos, para que sean tratados como un s�lo comando por MySQL, necesita configurar el valor "<code>#NEXT_X_ROWS_AS_ONE_COMMAND:xxx</code>" . El parser tratar� X n�mero de comandos como uno solo.<br />
Si est� ejecutando este archivo a trav�s de phpMyAdmin o equivalente, el comentario "#NEXT..." es ignorado, y el script se procesar� correctamente.<br />
<br /><strong>NOTA: </strong>Las sentencias SELECT.... FROM... y LEFT JOIN necesitan que el "FROM" o "LEFT JOIN" est�n en una l�nea por s� mismos para que el parser pueda a�adir el prefijo de tabla.<br /><br />
<em><strong>Ejemplos:</strong></em>
<ul><li><code>#NEXT_X_ROWS_AS_ONE_COMMAND:4<br />
SET @t1=0;<br />
SELECT (@t1:=configuration_value) as t1 <br />
FROM configuration <br />
WHERE configuration_key = \'KEY_NAME_HERE\';<br />
UPDATE product_type_layout SET configuration_value = @t1 WHERE configuration_key = \'KEY_NAME_TO_CHECK_HERE\';<br />
DELETE FROM configuration WHERE configuration_key = \'KEY_NAME_HERE\';<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO tablename <br />
(col1, col2, col3, col4)<br />
SELECT col_a, col_b, col_3, col_4<br />
FROM table2;<br />&nbsp;</li>

<li>#NEXT_X_ROWS_AS_ONE_COMMAND:1<br />
INSERT INTO table1 <br />
(col1, col2, col3, col4 )<br />
SELECT p.othercol_a, p.othercol_b, po.othercol_c, pm.othercol_d<br />
FROM table2 p, table3 pm<br />
LEFT JOIN othercol_f po<br />
ON p.othercol_f = po.othercol_f<br />
WHERE p.othercol_f = pm.othercol_f;</li>
</ul></code>' );
  define('REASON_TABLE_ALREADY_EXISTS','No se puede crear la tabla %s porque ya existe');
  define('REASON_TABLE_DOESNT_EXIST','No se puede borrar la tabla %s porque no existe.');
  define('REASON_TABLE_NOT_FOUND','No se puede ejecutar porque la tabla %s no existe.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','No se puede introducir configuration_key "%s" porque ya existe');
  define('REASON_COLUMN_ALREADY_EXISTS','No se pudo A�ADIR columna %s porque ya existe.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','No se pudo BORRAR la columna %s porque no existe.');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','No se pudo CAMBIAR la columna %s porque no existe.');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','No se pudo insertar prod-type-layout configuration_key "%s" porque ya existe');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','No se pudo borrar %s en la tabla %s porque no existe.');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','No se pudo borrar la clave primaria en la tabla %s porque no existe.');
  define('REASON_INDEX_ALREADY_EXISTS','No se pudo a�adir el �ndice %s a la tabla %s porque ya existe.');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','No se pudo a�adir la clave primaria a la tabla %s porque ya existe la clave primaria.');
  define('REASON_NO_PRIVILEGES','Usuario '.DB_SERVER_USERNAME.'@'.DB_SERVER.' no tiene privilegios de %s para la base de datos '.DB_DATABASE.'.');

?>