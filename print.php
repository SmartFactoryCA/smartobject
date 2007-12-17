<?php

/**
* $Id$
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

include_once("header.php");
require_once SMARTOBJECT_ROOT_PATH.'class/smartloader.php';
require_once XOOPS_ROOT_PATH.'/class/template.php';

$xoopsTpl = new XoopsTpl();
$myts =& MyTextSanitizer::getInstance();
$xoopsConfig['sitename'] = $myts->displayTarea($xoopsConfig['sitename']);



$xoopsTpl->display('db:smartobject_print.html');
?>