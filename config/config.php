<?php



//Контакты для обращения к контролиру
define('PathPrefix', '../controllers/');
define('PathPostfix','Controller.php');

//>используемый шаблон
$template ='default';

//>Константы для общения к контроллерам
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

//Путь к файлам шаблона в вебпространстве
define('TemplateWebPath', "/templates/{$template}/");

//Иницилизуруем шаблон Смарти
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('teplateWebPath',TemplateWebPath);
