<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-29 10:08:40
  from 'C:\xampp\htdocs\gimon\view\templates\template\header-b.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a6e74188eff73_00130348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf04cae20ef096e3ebf716af8270fb211e8ae22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\template\\header-b.tpl',
      1 => 1517188062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6e74188eff73_00130348 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
css/uikit.min.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
css/master.css" />
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
js/uikit.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
js/uikit-icons.min.js"><?php echo '</script'; ?>
>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - gimon</title>
</head>
<body class="uk-background-muted">
  <header class="">
    <nav class="default-primary-color primary-text-color uk-padding" uk-navbar>
      <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
          <a class="text-primary-color" href="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" uk-icon="icon:chevron-left; ratio: 1.2"></a>
        </ul>
      </div>
      <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
          <li class="uk-logo text-primary-color"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ul>
      </div>
      <!--
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-active"><a href="#">Active</a></li>
          <li><a href="#">Item</a></li>
        </ul>
      </div>
    -->
    </nav>
  </header>
  <main class="uk-animation-slide-right">
<?php }
}
