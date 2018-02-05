<?php
/* Smarty version 3.1.32-dev-35, created on 2018-02-05 18:10:42
  from 'C:\xampp\htdocs\gimon\view\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-35',
  'unifunc' => 'content_5a781f92765911_14785674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766a0ebdac15cd0399e5dc960161fb8222d8dc11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gimon\\view\\templates\\index\\index.tpl',
      1 => 1517821194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.tpl' => 1,
    'file:../template/footer.tpl' => 1,
  ),
),false)) {
function content_5a781f92765911_14785674 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'LOGIN','WEB'=>$_prefixVariable1), 0, false);
?>

<div id="content" class="uk-container uk-text-center">
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="uk-meta">匿名質問サービス「gimon.noyatsu」</h3>
    <p class="ms-mini">Anonymous Questioning Service<br>「gimon.noyatsu」</p>
    <a class="uk-button uk-button-primary" href="user/login">Login with Twitter</a>
    <p class="uk-text-meta">Please read <a href="#info" class="uk-text-success" uk-scroll>'Information'</a> and agree it before using this app. / 使用前に<a href="#info" class="uk-text-success" uk-scroll>お知らせ</a>を読んだ上で同意してください。</p>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">Feature / 特徴</h3>
    <article class="uk-article">
      <div uk-lightbox="animation: fade">
        <a href="1.png"><img src="1.png" width="150"></a>
        <a href="2.png"><img src="2.png" width="150"></a>
        <a href="3.png"><img src="3.png" width="150"></a>
      </div>
      <p>「gimon.noyatsu」はTwitterを利用した匿名質問サービスです。ほかにはない特徴として テキストベースのQ&A
      ・ブロック機能
      ・悪意のある言葉非表示機能
      があります。テキストベースなQ&AなのでTwitterの画像一覧を自分宛ての質問画像で埋め尽くさなくて済みます。
      また、悪意のある質問を送ってくる相手をブロックすることができます。さらに、悪意のある言葉が含まれる投稿を自動で非表示にすることで、
      あなたの心を守ります。</p>
      <p class="ms-mini">"gimon.noyatsu" is an anonymous questioning service using Twitter. There are some features which are text-based Q & A, block function, malicious word hiding function. Because it is a text-based Q & A, you do not have to fill up the image list of Twitter with your own question images.
       Also, you can block someone sending malicious questions. In addition, we will protect your mind by automatically hiding posts containing malicious words.</p>
    </article>
  </div>
  <br>
  <div class="uk-card uk-card-default uk-card-body">
    <h3 id="info" class="">Information / おしらせ</h3>
    <p>現在ベータテスト中です。当サイトのコンテンツの内容が正確であるかどうか、最新のものであるかどうか、安全なものであるか等について保証をすることはなく、何らの責任を負うものではありません。また、管理者は通知することなく当サイトに掲載した情報の訂正、修正、追加、中断、削除等をいつでも行うことができるものとします。また、当サイト、またはコンテンツのご利用により、万一、ご利用者様に何らかの不都合や損害が発生したとしても、当サイトは何らの責任を負うものではありません。</p>
    <p class="ms-mini">We are currently in beta testing. The administrator shall be able to correct, add, suspend, delete, etc. any information posted on this site without notice at any time. Moreover, even if some inconvenience or damage occurs to the user by using this site or the contents, this site does not take any responsibility.</p>
  </div>
  <br>
  <a href="#" uk-totop uk-scroll></a>
  <br>
  <br>
</div>
<?php ob_start();
echo $_smarty_tpl->tpl_vars['WEB']->value;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:../template/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('WEB'=>$_prefixVariable2), 0, false);
?>

<?php }
}
