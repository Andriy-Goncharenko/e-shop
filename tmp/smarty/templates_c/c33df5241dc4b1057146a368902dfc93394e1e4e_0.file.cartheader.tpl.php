<?php
/* Smarty version 3.1.29, created on 2016-05-20 20:19:44
  from "/var/www/graf2933/data/www/views/default/cartheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573f47309fa072_81534341',
  'file_dependency' => 
  array (
    'c33df5241dc4b1057146a368902dfc93394e1e4e' => 
    array (
      0 => '/var/www/graf2933/data/www/views/default/cartheader.tpl',
      1 => 1463764774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_573f47309fa072_81534341 ($_smarty_tpl) {
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Royal flowers|<?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="favicon.ico" />
                <link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="body">
		<div id="page-wrapper">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
