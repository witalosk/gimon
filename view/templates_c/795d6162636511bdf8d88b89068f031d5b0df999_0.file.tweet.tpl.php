<?php
/* Smarty version 3.1.32-dev-35, created on 2018-01-30 17:57:17
  from 'C:\xampp\htdocs\gimon\view\templates\gimon\tweet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a70336d7eab17_11084461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '795d6162636511bdf8d88b89068f031d5b0df999' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\gimon\\tweet.tpl',
      1 => 1517302634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header-b.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a70336d7eab17_11084461 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header-b.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Share with comment','WEB'=>$_prefixVariable1), 0, false);
?>

<div class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <p><?php echo $_smarty_tpl->tpl_vars['gimon']->value['text'];?>
</p>
      <p class="uk-text-meta uk-margin-remove-top"><time><?php echo $_smarty_tpl->tpl_vars['gimon']->value['created_at'];?>
</time></p>
    </div>
    <div class="uk-card-body">
      <form action="" method="post">
        <textarea name="text" class="uk-textarea" rows="4" placeholder="Your comment:"></textarea>
        <input type="submit" class="uk-button uk-button-primary uk-margin" value="Tweet">
      </form>
    </div>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-header">
      <h3>あなたの回答ツイート</h3>
      <p class="ms-mini">Your answer tweet</p>
    </div>
    <div class="uk-card-body">
      <?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
