<?php
/* Smarty version 3.1.32-dev-35, created on 2018-02-05 18:34:06
  from 'C:\xampp\htdocs\gimon\view\templates\template\header-b.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a78250ec83202_15669279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cf04cae20ef096e3ebf716af8270fb211e8ae22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\template\\header-b.tpl',
      1 => 1517823244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a78250ec83202_15669279 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@gimon_noyatsu" />
  <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
" />
  <meta property="og:title" content="gimon.noyatsu" />
  <meta property="og:description" content="Answer questions from your follower." />
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
logo.PNG" />
  <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
logo.PNG" sizes="205x205" />
  <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
logo.PNG" sizes="205x205" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
css/uikit.min.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
css/master.css" />
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
js/uikit.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
js/uikit-icons.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB']->value;?>
js/barba.js"><?php echo '</script'; ?>
>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - gimon</title>
</head>
<body class="uk-background-muted">
  <div id="barba-wrapper">
    <div class="barba-container">
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
<main class="">
<?php }
}
