{include file='../template/header.tpl' title='LOGIN' WEB={$WEB}}
<div class="uk-container uk-text-center">
  <div class="uk-card uk-card-default uk-card-body">
    <h3 class="">匿名質問サービス<br>「gimon.noyatsu」</h3>
    <form action="user/login" method="post">
      <div>
        <label>E-mail</label>
        <input class="uk-input" type="text" name="email">
      </div>
      <div>
        <label>Password</label>
        <input class="uk-input" type="password" name="pass">
      </div>
      <input class="uk-button uk-button-primary uk-margin" type="submit" value="Login" style="cursor: pointer;">
    </form>
    <a class="uk-button" href="user/register">New account</a>
  </div>
</div>
{include file='../template/footer.tpl'}
