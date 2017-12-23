{include file='../template/header-b.tpl' title='NEW ACCOUNT' WEB={$WEB}}
  <div class="uk-container">
      <div class="uk-panel uk-text-center">
        <br>
        <p>All fields are required.</p>
        <form action="" method="post">
          <div>
            <label>E-mail</label>
            <input class="uk-input" type="text" name="email">
          </div>
          <div>
            <label>Password</label>
            <input class="uk-input" type="password" name="password">
          </div>
          <div>
            <label>Password(confirm)</label>
            <input class="uk-input" type="password" name="password2">
          </div>
          <div>
            <label>Username</label>
            <input class="uk-input" type="text" name="name">
          </div>
          <br>
          <input class="uk-button uk-button-primary" type="submit" value="Register" style="cursor: pointer;">
        </form>
      </div>
    </div>
  </div>
{include file='../template/footer.tpl'}
