<?php
/** op-module-reference:/index.php
 *
 * @created   2018-10-30
 * @updated   2019-03-29
 * @version   1.0
 * @package   op-module-reference
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** Namespace
 *
 */
namespace OP\MODULE\REFERENCE;

/*
//	Check if has slash of end of url.
if( $_SERVER['DOCUMENT_ROOT'] === dirname($app->URL($app->Unit('Router')->EndPoint())) ){
	$app->Unit('Http')->Location($_SERVER['REDIRECT_URL'].'/', 301);
};
*/

//	Calc reference root.
$root_path = dirname( OP()->Router()->EndPoint() );

//	Register reference root.
OP()->MetaPath()->Set('reference', $root_path);

//	...
OP()->WebPack()->Auto('./webpack/');

//	...
OP()->Template('index.phtml');
