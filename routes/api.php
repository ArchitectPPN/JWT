<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/29
 * Time: 17:56
 */

$router->group(
	[
		'prefix' => '/common',
	], function () use ($router) {

	//公共字典
	$router->get('test',  'Controller@Test');
	$router->get('dictionarySearchType',  'Controller@dictionarySearchType');

});