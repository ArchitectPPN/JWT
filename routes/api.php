<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/29
 * Time: 17:56
 */

$router->group(
	[
		'prefix' => '/api/',
	], function () use ($router) {

	$router->get('first-api',  'Controller@firstApi');
});